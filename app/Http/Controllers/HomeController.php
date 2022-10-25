<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Shortlink;
use Illuminate\Support\Facades\Session;
use Redirect;
use DB;
use Cookie;
use Illuminate\Support\Facades\Auth;
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
  
    public function home(Request $request)
    {
        
        if(!Cookie::get('tracking_id')){
            $ip =  $request->ip();
            $mac = DB::table('mac_and_ip')->where('ip', trim($ip))->first();
            if($mac){
                Cookie::queue('tracking_id', $mac->id, '613200');
            }else{
                
                $tracking_id= DB::table('mac_and_ip')->insertGetId([
                    'ip'=>$ip,
                    'mac'=>''
                ]);
                Cookie::queue('tracking_id', $tracking_id, '613200');
            } 
        }
        $data =[];
        $data['short_link'] = Session::get('short_link');
        return view('home.home', $data);
    }
    public function home_redirect(Request $request)
    {
        $link = trim($request->link);
        $data =[];
        $data['short_link'] = Session::get('short_link');
        if($link){
            $shortlink = Shortlink::select('to_url', 'thumbnail_url', 'title', 'to_url')->where('code', '=', $link)->get();
            if( (int)count($shortlink)> (int)0){
                $data['image'] =  $shortlink[0]->thumbnail_url;
                $data['title'] =  $shortlink[0]->title;
                $data['to_url'] =  $shortlink[0]->to_url;
                // return Redirect::to($shortlink[0]->to_url);
            }
            
        }
      
        return view('home.welcome_redirect', $data);
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
        $Shortlink->user_id        = Auth::id();
        
      
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
