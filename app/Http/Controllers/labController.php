<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lab_consumables;

class labController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lab.index');
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
    public function consumables()
    {
        $lab_consumables = lab_consumables::all();
        return view('lab.consumables')->with('lab_consumables', '$lab_consumables');
    }
    public function records()
    {
        return view('lab.records');
    }
    public function test()
    {
        return view('lab.tests');
    }
    public function addConsumables(Request $request)
    {
        $this->validate($request,[
            'cName'=>'required',
            'cMake'=>'required',
            'expDate'=>'required',
            'type'=>'required',
            'quantity'=>'required',
            'unitPrice'=>'required',
          ]);
          //$id = $request->input('patientId');
        $post = new lab_consumables();
        $post-> hospital_id = $request->input('hospital_id');
        //$post-> staff_id = Auth::user()->hId;
        $post-> staff_id = $request->input('user_id');
        $post-> name = $request->input('cName');
        $post-> make = $request->input('cMake');
        $post-> expDate = $request->input('expDate');
        $post-> type = $request->input('type');
        $post-> quantity = $request->input('quantity');
        $post-> unitPrice = $request->input('unitPrice');
        $post->save();
        return back()->with('success','Lab Consumable saved successfully!');
          
    }
}
