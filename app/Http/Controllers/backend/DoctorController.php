<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doctor;
use App\Department;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $doctors=Doctor::all();
        $departments=Department::all();
        return view('backend.doctors.index',compact('doctors','departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $departments=Department::all();
        return view('backend.doctors.create',compact('departments'));
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
        $request->validate(['doctorName'=>'required|min:5|max:191',
            'department'=>'required',
            'doctorNumber'=>'required']);

        $imageName= time().'.'.$request->doctorPhoto->extension();
        $request->doctorPhoto->move(public_path('images'),$imageName);
        $filepath='images/'.$imageName;

        //data insert
        $doctor=new Doctor;
        $doctor->doctorName=$request->doctorName;
        $doctor->doctorNumber=$request->doctorNumber;
        $doctor->phoneNumber=$request->phoneNumber;
        $doctor->department_id=$request->department;
        $doctor->doctorPhoto=$filepath;
        $doctor->save();

        //return
        return redirect()->route('doctors.index');
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
        $doctor=Doctor::find($id);
        $departments=Department::all();
        //dd($category);
        return view('backend.doctors.edit',compact('departments','doctor'));
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
        //validation
        $request->validate(['doctorName'=> 'required|min:5|max:191',
            'doctorPhoto'=>'sometimes|mimes:jpeg,bmp,png']);

        //file upload
        if($request->hasFile('doctorPhoto')){
            $imageName= time().'.'.$request->doctorPhoto->extension();
            $request->doctorPhoto->move(public_path('images'),$imageName);
            unlink($request->oldphoto);
            $filepath='images/'.$imageName;
        }else{
            $filepath=$request->oldphoto;
        }


        

        //data update
        $doctor=Doctor::find($id);
        $doctor->doctorName=$request->doctorName;
        $doctor->phoneNumber=$request->phoneNumber;
        $doctor->doctorNumber=$request->doctorNumber;
        $doctor->doctorPhoto=$filepath;
        $doctor->save();

        //return
        return redirect()->route('doctors.index');
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
         $doctor=Doctor::find($id);
        $doctor->delete();
        return redirect()->route('doctors.index');
    }
}
