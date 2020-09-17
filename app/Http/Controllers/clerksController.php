<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Patient;

class clerksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("clerk.index");
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
    public function patient()
    {
      $patients = Patient::where('hId', Auth::user()->hId)->orderBy('created_at','DESC')->paginate(20);
      return view('clerk.patient')->with('patients',$patients);
    }
    public function deletePatient(Request $request)
    {
        $id = $request->input('patientId');
        $delete = Patient::find($id);
        $delete->delete();
        return back()->with('success','Patient deleted successfully!');
    }   
    public function updatePatient(Request $request)
    {
        $this->validate($request,[
            'fName'=>'required',
            'mName'=>'required',
            'lName'=>'required',
            'age'=>'required',
            'phone'=>'required',
            'residArea'=>'required',
            'state'=>'required',
            'gender'=>'required',
          ]);
        $id = $request->input('patientId');
        $update = Patient::find($id);
        $update-> fName = $request->input('fName');
        $update-> mName = $request->input('mName');
        $update-> lName = $request->input('lName');
        $update-> age = $request->input('age');
        $update-> phone = $request->input('residArea');
        $update-> residArea = $request->input('residArea');
        $update-> state = $request->input('state');
        $update-> gender = $request->input('gender');
        $update->save();
        return back()->with('success','Patient updated successfully!');
    }
}
