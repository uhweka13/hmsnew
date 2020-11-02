<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Patient;
use App\Precord;
Use App\patient_vitals;
Use App\lab_investigations;
use DB;
class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('doctor.index');
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
            'diagnose'=>'required'
        ]);
        $id = $request->input('patientId');
        $post = new Precord();
        $post-> pId = $id;
        $post-> diagnose = $request->input('diagnose');
        $post-> hId = Auth::user()->hId;
        $post->save();
        $update = Patient::find($id);
        $update-> hId = "0";
        $update->save();
        return back()->with('success','Patient diagnose successfully!');

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
    public function consultancy()
    {
      $consultancies = Patient::where(['hId'=> Auth::user()->hId,'status'=> '1'])->orderBy('created_at','DESC')->paginate(20);
      return view('doctor.consultancy')->with('consultancies',$consultancies);
    }
    public function record()
    {
        $records = DB::table('precords')
        ->select('patients.*', 'precords.diagnose')
        ->join('patients','patients.id','=','precords.pId')
        ->where('precords.hId',Auth::user()->hId)
        ->paginate(20);
        return view('doctor.records')->with('records',$records);
    }
    public function labInvestigate(Request $request)
    {
        
      
        $this->validate($request,[
            'nameOfSpeciment'=>'required',
            'exRequest'=>'required',
            'labName'=>'required'
        ]);  
        $id = $request->input('patientId');
        $post = new lab_investigations();
        $post-> pId = $id;
        $post-> speciment = $request->input('nameOfSpeciment');
        $post-> examination = $request->input('exRequest');
        $post-> Lab = $request->input('labName');
        $post-> hId = Auth::user()->hId;
        $post->save();
        return back()->with('success','Patient Investigation sent!');
    }
  
   
}
