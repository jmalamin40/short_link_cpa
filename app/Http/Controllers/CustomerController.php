<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Shortlink;
use Illuminate\Support\Facades\Session;


use DB;
use Cookie;
use Illuminate\Support\Facades\Auth;
class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('auth');
    }
    public function index(Request $request)
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

        $id = Auth::id();
        $data=[];
        $data['shortlinks'] = DB::table('shortlinks')->where('user_id', '=', $id)->get();
        return view('customer.dashboard', $data);
    }
}