<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Hospital;
use App\User;
use App\Personel;
use App\Patient;
use App\Department;
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
      $departments = Department::all();
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
      $result = array(
          'personels'=>$personels,
          'departments'=>$departments,
          'displayHospital'=>$displayHospital
      );
      return view('hospital.add_personel')->with('result',$result);
    }
    public function patient_hospital()
    {
      $patients = User::orderBy('created_at','DESC')->paginate(20);
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
      $result = array(
        'patients'=>$patients,
        'displayHospital'=>$displayHospital
      );
      return view('hospital.add_patient')->with('$result',$result);
    }
    public function department()
    {
        $departments = Department::orderBy('created_at','DESC')->paginate(20);
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
        $result = array(
          'departments'=>$departments,
          'displayHospital'=>$displayHospital
        );
        return view('hospital.department')->with('result',$result);
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
        'department'=>'required',
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
      $post-> department = $request->input('department');
      $post-> gender = $request->input('gender');
      $post-> hId = Auth::user()->hId;
      $post-> password = Hash::make($password);
      $post->save();
      return back()->with('success','Personel added successfully!');
    }
    public function addPatient(Request $request)
    {
      $this->validate($request,[
        'fName'=>'required',
        'mName'=>'required',
        'lName'=>'required',
        'age'=>'required',
        'phone'=>'required',
        'state'=>'required',
        'residArea'=>'required',
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
      $post-> age = $request->input('age');
      $post-> phone = $request->input('phone');
      $post-> state = $request->input('state');
      $post-> residArea = $request->input('residArea');
      $post-> password = Hash::make($password);
      $post->save();
      return back()->with('success','Patient added successfully!');
    }
    public function addDepartment(Request $request)
    {
      $this->validate($request,[
        'department'=>'required',
        
      ]);
      
      $post = new Department();
      $post-> name = $request->input('department');
      $post->save();
      return back()->with('success','Department added successfully!');
    }
}
