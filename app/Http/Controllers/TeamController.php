<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Team;
use Auth;
class TeamController extends Controller
{
    public function __construct(){
        // $this->middleware('auth');//matiin kalo lagi testing mode
    }
    public function showForm(){

        $users = Auth::user()->id;

        return view('test1', compact('users'));

    }
    public function showBayar(){

        $users = Auth::user()->id;
        
        return view('test2',compact('users'));

    }
    public function showBerkas(){

        $users = Auth::user()->id;
        
        return view('test3', compact('users'));

    }


    public function uploadLetter(Request $request,$id){//ini id di tabel teams
        $this->validate($request,[
            'letter' => 'mimes:pdf|max:2048',
            'ktm_img1' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'ktm_img2' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'ktm_img3' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);
        $team=Team::where('team_id',$id)->first();
        if($team->member_one !== NULL ){
            if($request->hasFile('ktm_img1')){
                $name = Storage::disk('local')->put('images', $request->ktm_img1);
                $team->ktm_img1 = $name;
                $team->member_one = $request->input('member_one'); 
            }
            else{
                return "Member 1 ga ada ktmnya boss";   
            }
        }
        if($team->member_two !== NULL ){
            if($request->hasFile('ktm_img2')){
                $name = Storage::disk('local')->put('images', $request->ktm_img2);
                $team->ktm_img2 = $name;
                $team->member_two = $request->input('member_two');
            }
            else{
                return "Member 2 ga ada ktmnya boss";   
            }
        }
        if($team->member_three !== NULL ){
            if($request->hasFile('ktm_img3')){
                $name = Storage::disk('local')->put('images', $request->ktm_img3);
                $team->member_three = $request->input('member_three');
                $team->ktm_img3 = $name;
            }
            else{
                return "Member 3 ga ada ktmnya boss";   
            }
        }
        $team->save();
        return "sukses bro uploadnya";
    }
    public function uploadPay(Request $request, $id){
        $this->validate($request,[
            'payment' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $name = Storage::disk('local')->put('images', $request->payment);   
        $data=array(
            'payment'=>$name,
        );
        Team::where('team_id',$id)->update($data);
        return "sukses bro";
    }

    public function addTeam(Request $request,$id){
        $this->validate($request,[
            'member_one'=>'required',
            'school'=>'required',
            'province'=>'required',
            'phone_num'=>'required',
            'tipe' =>'required'
        ]);

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
        $team->phone_num = $request->input('phone_num');
        //not required, maybe null
        $team->line_id = $request->input('line_id');
        $team->type = $request->input('tipe');
        $team->save();
        return "done broh";
    }

    
}
