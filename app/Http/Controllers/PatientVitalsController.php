<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientVitalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'pulse'=>'required',
            'temperature'=>'required',
            'respiration'=>'nullable',
            'pressure'=>'required',
            'note'=>'required',
           
          ]);
          
          $vital_sign = new Patient();
          $vital_sign-> pulse = $request->input('pulse');
          $vital_sign-> temp = $request->input('temperature');
          $vital_sign-> resp = $request->input('respiration');
          $vital_sign-> pressure = $request->input('pressure');
          $vital_sign-> Note = $request->input('note');
          $vital_sign-> patient_id = Auth::patients()->id;
          $vital_sign->save();
          return back()->with('success','Patient added successfully!');
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
}
