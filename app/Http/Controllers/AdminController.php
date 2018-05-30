<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Team;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function main(){
        $user = Team::all();
        return view('adminhome',compact('user'));
    }
    public function detail($id){
        $user = Team::where('id',$id)->first();
        return view('admindetail',compact('user'));
    }
    public function verify($id){
        $user = Team::where('id',$id)->first();
        $user->verify = 1;
        $user->save();
        return redirect('admin/home');
    }
}
