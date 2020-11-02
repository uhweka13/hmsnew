<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\drugs;


class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pharmacy.index');
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
        $this->validate($request,[
            'nameOfDrug'=>'required',
            'drugMake'=>'required',
            'drugStrength'=>'required',
            'expDate'=>'required',
            'drugType'=>'required',
            'quantity'=>'required',
            'unitPrice'=>'required',
          ]);
          //$id = $request->input('patientId');
        $post = new drugs();
        $post-> hospital_id = $request->input('hospital_id');
        $post-> staff_id = $request->input('user_id');
        $post-> nameOfDrug = $request->input('nameOfDrug');
        $post-> drugMake = $request->input('drugMake');
        $post-> drugStrength = $request->input('drugStrength');
        $post-> expDate = $request->input('expDate');
        $post-> drugType = $request->input('drugType');
        $post-> quantity = $request->input('quantity');
        $post-> unitPrice = $request->input('unitPrice');
        $post->save();
        return back()->with('success','Lab Consumable saved successfully!');
          
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
    public function drugs()
    {
        
        return view('pharmacy.drugs');
    }
    public function consultancy()
    {
      $consultancies = Patient::where(['hId'=> Auth::user()->hId,'status'=> '1'])->orderBy('created_at','DESC')->paginate(20);
      return view('doctor.consultancy')->with('consultancies',$consultancies);
    }
    public function records()
    {
        //
        return view('pharmacy.records');
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
