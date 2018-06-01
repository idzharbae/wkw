<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Team;
use Auth;
class ProfileController extends Controller
{
    public function __construct(){
    	$this->middleware('auth'); //matiin kalo lagi testing mode
    }
    
    public function editProfile(){
        $users = Auth::user()->id;
        $data = Team::where('team_id',$users)->first();
        if($data == NULL){    	
		    return view('reg_stp1', compact('users')); 
        }
        else{
	        return view('editprofile',compact('data'));
        }
    }

    public function saveProfile(Request $request){
        $this->validate($request,[
            'member_one'=>'required',
            'school'=>'required',
            'province'=>'required',
            'phone_num'=>'required',
            // 'tipe' =>'required'
        ]);
        
        $id = $request->input('id');
        $team = new Team;
        //cek kalo member 2 ama 3 ada atau tidak
        $team->team_id = $id;
        $team->member_one = $request->input('member_one');
        $team->member_two = $request->input('member_two');
        $team->member_three = $request->input('member_three');
        $team->school = $request->input('school');
        $team->province = $request->input('province');
        $team->phone_num = $request->input('phone_num');
        $team->type = $request->input('type');
        //not required, maybe null
        $team->line_id = $request->input('line_id');
        // $team->type = $request->input('tipe');
        $team->save();
        return redirect()->route('team.profile');
    }

    public function teamProfile(){
        $users = Auth::user()->id;
        $data = Team::where('team_id',$users)->first();
        if($data == NULL){    	
		    return view('reg_stp1', compact('users')); 
        }
        else{
	        return view('profile',compact('data'));
        }
    }
    public function payment(){
        $user_id = Auth::user()->id;
        $data = Team::where('team_id',$user_id)->first();
        return view('payment',compact('data'));

    }


    public function uploadLetter(Request $request){//ini id di tabel teams
        $this->validate($request,[
            'letter' => 'mimes:pdf|max:2048',
            'ktm_img1' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'ktm_img2' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'ktm_img3' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);
        $id = $request->input('id');
        $team=Team::where('team_id',$id)->first();
        if($team->member_one !== NULL ){
            if($request->hasFile('ktm_img1')){
                $name = Storage::disk('local')->put('images', $request->ktm_img1);
                $team->ktm_img1 = $name; 
            }
        }
        if($team->member_two !== NULL ){
            if($request->hasFile('ktm_img2')){
                $name = Storage::disk('local')->put('images', $request->ktm_img2);
                $team->ktm_img2 = $name;
            }
        }
        if($team->member_three !== NULL ){
            if($request->hasFile('ktm_img3')){
                $name = Storage::disk('local')->put('images', $request->ktm_img3);
                $team->ktm_img3 = $name;
            }
        }
        if($request->hasFile('letter')){
            $name = Storage::disk('local')->put('doc', $request->letter);
            $team->letter = $name;
        }
        $team->save();
        return redirect('/profile/')->with('msg',"Profile Picture Changed Successfully");
    }
    public function uploadPay(Request $request){
        
        $this->validate($request,[
            'payment' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        
        $id = $request->input('id');
        $name = Storage::disk('local')->put('images', $request->payment);   
        $data=array(
            'payment'=>$name,
        );
        Team::where('team_id',$id)->update($data);
        return redirect('/profile/');
    }
}
