<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Hospital;
use App\User;

class PagesController extends Controller
{
    public function index(){
        return view('general.index');
    }
    public function intro(){
        return view('general.intro');
    }
    public function addHospital(Request $request)
    {
        $this->validate($request,[
            'hType'=>'required',
            'hName'=>'required',
            'hEmail'=>'required',
            'hPhone'=>'required',
            'hState'=>'required',
            'hLocation'=>'required',
            'hLogo'=>'required',
        ]);
        if ($request->hasFile('hLogo')) {
            //Get file with extension
            $fileNameWithExt = $request->file('hLogo')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get just ext
           $extension = $request->file('hLogo')->getClientOriginalExtension();
            //File to store
            $fileNameToStore =  $filename.'_'.time().'.'.$extension;
            //Upload the image
            $path = $request->file('hLogo')->storeAs('public/logo', $fileNameToStore);

       } else {
        $fileToStore = 'noImage.jpg';
        
       }
       $hEmail= $request->input('hEmail');
       $post = new Hospital();
       $post-> hType = $request->input('hType');
       $post-> hName = $request->input('hName');
       $post-> hEmail = $hEmail;
       $post-> hPhone = $request->input('hPhone');
       $post-> hWebsite = $request->input('hWebsite');
       $post-> hEstablish = $request->input('hEstablish');
       $post-> hLocation = $request->input('hLocation');
       $post-> hState = $request->input('hState');
       $post-> hLogo =  $fileNameToStore;
       $post-> hStatus =  0;
       $post->save();

       $email = Hospital::where('hEmail',$hEmail)->get();
       $hId = $email[0]['id'];
    //    Updating User Table With hospital Id
       $updateUserTable = User::find(Auth::user()->id);
       $updateUserTable-> hId = $hId;
       $updateUserTable-> role = 'admin';
       $updateUserTable->save();
       return back()->with('success','Hospital added successfully');
    }
    public function uploadProfileImg(Request $request)
    {
        if ($request->hasFile('profileImage')) {
            //Get file with extension
            $fileNameWithExt = $request->file('profileImage')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get just ext
           $extension = $request->file('profileImage')->getClientOriginalExtension();
            //File to store
            $fileNameToStore =  $filename.'_'.time().'.'.$extension;
            //Upload the image
            $path = $request->file('profileImage')->storeAs('public/profileimage', $fileNameToStore);

       } else {
        $fileToStore = 'noImage.jpg';
        
       }
       $upload = User::find(Auth::user()->id);
       $upload-> image = $fileNameToStore;
       $upload->save();
       return back()->with('success','Passport uploaded successfully!');
    } 
}
