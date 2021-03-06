<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Pusher\Pusher;
use App\User;
use App\Chart;

class ChartController extends Controller
{

	public function getUpdate(Request $request){
	   
        if(Auth::check()){
           $chartdata = Chart::where('user_id', '=', Auth::id())->orderBy('created_at', 'asc')->take(30)->get();
        }else{
            $chartdata = array();
        }

        $options = array(
            'cluster' => config('broadcasting.connections.pusher.options.cluster'),
            'encrypted' => config('broadcasting.connections.pusher.options.encrypted')
        );
        $pusher = new Pusher(
            config('broadcasting.connections.pusher.key'),
            config('broadcasting.connections.pusher.secret'),
            config('broadcasting.connections.pusher.app_id'),
            $options
        );

        $pusher->trigger('client-dashboard', 'get-chart'. Auth::id(), $chartdata);
       
	}
	    
}
