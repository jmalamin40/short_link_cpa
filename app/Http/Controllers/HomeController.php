<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Shortlink;
use Illuminate\Support\Facades\Session;
use Redirect;
use DB;
use Cookie;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function tracking_visitor(){
        if(!Cookie::get('tracking_id')){
            $shellexec = shell_exec('getmac'); 
            $shellexec= explode('_{', $shellexec);
            if(count($shellexec)>0){
                $shellexec= explode('}', $shellexec[1]);
                if(count($shellexec)>0){
                    $mac_large = $shellexec[0];
                    $mac = DB::table('mac_and_ip')->where('mac', trim($mac_large))->first();
                    if($mac){
                        Cookie::queue('tracking_id', $mac->id, '613200');
                    }else{
                        $ip =  $request->ip();
                        $tracking_id= DB::table('mac_and_ip')->insertGetId([
                            'mac'=>$mac_large,
                            'ip'=>$ip
                        ]);
                        Cookie::queue('tracking_id', $tracking_id, '613200');
                    }
                }
            
            }
        }
        return true;
    }
    public function home(Request $request)
    {
        
        // $this->tracking_visitor();
        $data =[];
        $data['short_link'] = Session::get('short_link');
      
        return view('welcome', $data);
    }
    public function home_redirect(Request $request)
    {
        $link = trim($request->link);
        $data =[];
        $data['short_link'] = Session::get('short_link');
        if($link){
            $shortlink = Shortlink::select('to_url')->where('code', '=', $link)->get();
            if( (int)count($shortlink)> (int)0){
                return Redirect::to($shortlink[0]->to_url);
            }
            
        }
    }
    public function generator(Request $request)
    {
       try{
        $Shortlink                 = new Shortlink;
        $Shortlink->to_url         = $request->to_url;
        $Shortlink->thumbnail_url  = $request->thumbnail_url;
        $Shortlink->title          = $request->title;
        $Shortlink->code           = substr(md5(mt_rand()), 0, 7);
        $Shortlink->tracking_id    = Cookie::get('tracking_id');
      
        if($Shortlink->save()){
            Session::put('short_link', url('/').'/'.$Shortlink->code);
            return json_encode(array(
                'status'=>true,
                 "code"=>200,
                 'data'=>array('short_link'=>url('/').'/'.$Shortlink->code),
            ));
        }else{
            return json_encode(array(
                'status'=>false,
                 "code"=>500,
                 'msg'=>'something went wrong',
            ));
        }
       }catch(Exception $e){
        return json_encode(array(
            'status'=>false,
             "code"=>500,
             'msg'=>$e,
        ));
       }
        
    }
}
