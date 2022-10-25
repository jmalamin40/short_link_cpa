<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Shortlink;
use Illuminate\Support\Facades\Session;

use DB;

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
    public function index()
    {
        $id = Auth::id();
        $data=[];
        $data['shortlinks'] = DB::table('shortlinks')->where('user_id', '=', $id)->get();
        return view('customer.dashboard', $data);
    }
}