<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class FrontController extends Controller
{
    public function index()
    {
    	$recent=DB::table('recents')->paginate('5');
    	$data=DB::table('running_elections')->get();
    	return view('frontend.home',compact('data','recent'));
    }

    public function RunningElection($id)
    {
    	$data=DB::table('running_elections')->where('id',$id)->first();

    	//return response()->json($data);
    	return view('frontend.notice',compact('data'));
    }

     public function Recent($id)
    {
    	$data=DB::table('recents')->where('id',$id)->first();

    	//return response()->json($data);
    	return view('frontend.notice',compact('data'));
    }

    
}
