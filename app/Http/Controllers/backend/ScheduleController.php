<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Schedule;
use App\Weekday;
use App\Period;
use App\Doctor;
use App\Department;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schedules=Schedule::all();
        $weekdays=Weekday::all();
        $periods=Period::all();
        $doctors=Doctor::all();
        $departments=Department::all();
        
        
        return view('backend.schedules.index',compact('schedules','weekdays','periods','doctors','departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $weekdays=Weekday::all();
        $periods=Period::all();
        $doctors=Doctor::all();
       // $departments=Department::all();
        return view('backend.schedules.create',compact('weekdays','periods','doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $schedule=new Schedule;
        $schedule->day_id=$request->weekday;
        $schedule->period_id=$request->period;
        $schedule->doctor_id=$request->doctor;
        $schedule->save();

        //return
        return redirect()->route('schedules.index');
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
        $schedule=Schedule::find($id);
        $weekdays=Weekday::all();
        $periods=Period::all();
        $doctors=Doctor::all();
        //dd($schedule);
        //dd($weekdays);
        //$departments=Department::all();
        //dd($category);
        return view('backend.schedules.edit',compact('schedule','weekdays','periods','doctors'));
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
        

       
        //data insert
        $schedule=new Schedule;
        $schedule->day_id=$request->weekday;
        $schedule->period_id=$request->period;
        $schedule->doctor_id=$request->doctor;
        
        $schedule->save();

        //return
        return redirect()->route('schedules.index');
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
        $schedule=Schedule::find($id);
        $schedule->delete();
        return redirect()->route('schedules.index'); 
    }
}
