<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Hospital;
use App\User;
use App\Personel;
use App\Patient;
use DB;
class HospitalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $role = 'admin';
        $hospitals = DB::table('hospitals')
        ->select('hospitals.hName', 'users.role')
        ->join('users','users.hId','=','hospitals.id')
        ->where(['users.id'=> $id, 'users.role'=>$role ])
        ->orWhere(function($query) use ($id, $role)
        {
            $query->where(['users.id'=> $id, 'users.role'=>$role ]);
        })
        ->get();
        foreach ($hospitals as $key => $hospital) {
         $displayHospital = $hospital->hName;
        }
        
        return view('hospital.index')->with('displayHospital',$displayHospital);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function personel()
    {
      $personels = User::orderBy('created_at','DESC')->paginate(20);
      return view('hospital.add_personel')->with('personels',$personels);
    }
    public function patient()
    {
      $patients = User::orderBy('created_at','DESC')->paginate(20);
      return view('hospital.add_patient')->with('patients',$patients);
    }
    public function addPersonel(Request $request)
    {
      $this->validate($request,[
        'fName'=>'required',
        'mName'=>'required',
        'lName'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'residArea'=>'required',
        'role'=>'required',
        'password'=>'required',
      ]);
      $password = $request->input('password');
      $cpassword = $request->input('password');
      if ($password != $cpassword) {
          return back()->with('error','Password do not match!');
      }
      
      $post = new User();
      $post-> fName = $request->input('fName');
      $post-> mName = $request->input('mName');
      $post-> lName = $request->input('lName');
      $post-> email = $request->input('email');
      $post-> phone = $request->input('phone');
      $post-> residArea = $request->input('residArea');
      $post-> role = $request->input('role');
      $post-> password = Hash::make($password);
      $post->save();
      return back()->with('success','Personel added successfully!');
    }
    public function addPatient(Request $request)
    {
    //   $this->validate($request,[
    //     'fName'=>'required',
    //     'mName'=>'required',
    //     'lName'=>'required',
    //     'email'=>'required',
    //     'phone'=>'required',
    //     'state'=>'required',
    //     'residArea'=>'required',
    //     'password'=>'required',
    //   ]);
      $password = $request->input('password');
      $cpassword = $request->input('password');
      if ($password != $cpassword) {
          return back()->with('error','Password do not match!');
      }
      
      $post = new User();
      $post-> fName = $request->input('fName');
      $post-> mName = $request->input('mName');
      $post-> lName = $request->input('lName');
      $post-> email = $request->input('email');
      $post-> phone = $request->input('phone');
      $post-> state = $request->input('state');
      $post-> residArea = $request->input('residArea');
      $post-> password = Hash::make($password);
      $post->save();
      return back()->with('success','Personel added successfully!');
    }
}
