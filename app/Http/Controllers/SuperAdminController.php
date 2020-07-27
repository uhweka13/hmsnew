<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index(){
        return view('superadmin.index');
    }

    public function order(){
        return view('superadmin.order');
    }
}
