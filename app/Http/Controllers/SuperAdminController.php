<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Hospital;
use App\User;

class SuperAdminController extends Controller
{
    public function index(){
        return view('superadmin.index');
    }

    public function order(){
        $hospitals = Hospital::all();
        return view('superadmin.order')->with('hospitals',$hospitals);
    }
    public function approve(Request $request)
    {
        $hId = $request->input('hId');
        $datemain = Carbon::now();
        $attDate = $datemain->toDateString();

        $periodto = $datemain->addDays(365);
        $periodtoMain = $periodto->toDateString();

        $update = Hospital::find($hId);
        $update-> hStatus = 'Approved';
        $update-> hStartDate = $datemain;
        $update-> hEndDate = $periodtoMain;
        $update->save();
        // Update user table
        $get = User::where(['role'=>'admin','hId'=>$hId])->get();
        $id = $get[0]['id'];
        $updateUser = User::find($id);
        $updateUser-> status = 'Approved';
        $updateUser->save();
        return back()->with('success','Hospital approved!');
    
    }
}

