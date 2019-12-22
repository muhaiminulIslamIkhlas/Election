<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
	    public function __construct()
		{
			   $this->middleware('auth');
		}

	public function index()
	{
		$re=DB::table('running_elections')->get();
		return view('admin.runningelection',compact('re'));
	}

	public function LogOut(){
		Auth::logout();

		return redirect('/');
	}

	public function StoreRunElection(Request $request)
	{
		$data=array('title'=>$request->title,
			   'details'=>$request->details);
		
		DB::table('running_elections')->insert($data);

		return Redirect()->back();
	}

	public function DeleteRe($id)
	{
		DB::table('running_elections')->where('id',$id)->delete();

		return Redirect()->back();
	}

	public function EditRe($id)
	{
		$data=DB::table('running_elections')->where('id',$id)->first();

		return view('admin.edit-re',compact('data'));
	}

	public function UpdateRe($id,Request $request)
	{
		$data=array('title'=>$request->title,
			   'details'=>$request->details);
		DB::table('running_elections')->where('id',$id)->update($data);

		return redirect('/dashboard');

	}

	public function RecentIndex()
	{
		$data=DB::table('recents')->get();
		return view('admin.recent',compact('data'));
	}

	public function StoreRecent(Request $request)
	{
		$data=array('title'=>$request->title,
			   'details'=>$request->details);
		
		DB::table('recents')->insert($data);

		return Redirect()->back();
	}

	public function EditRecent($id)
	{
		$data=DB::table('recents')->where('id',$id)->first();

		return view('admin.edit-recent',compact('data'));
	}

	public function UpdateRecent($id,Request $request)
	{
		$data=array(
			'title'=>$request->title,
			'details'=>$request->details
		);

		DB::table('recents')->where('id',$id)->update($data);

		return redirect('recent');
	}

	public function DeleteRecent($id)
	{
		DB::table('recents')->where('id',$id)->delete();

		return Redirect()->back();
	}
}
