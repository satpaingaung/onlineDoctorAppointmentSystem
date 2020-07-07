<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Schedule;
use App\Department;
use DB;
class FrontendController extends Controller
{
    //
    public function index($value='')
    {

    	return view('frontend.index');
    }
    public function checkdoctor(Request $request)
    {
    	
    	$departments=Department::all();
    	$choosedepartments=$request->department;
    	//echo $choosedepartments;
    	//dd ($$choosedepartments);
    	$today = date('w');
    	
    	// $ldate=WEEKDAY($ldate);
    	//echo $today;
    	//$todaydoctor = Schedule::where('day_id',$today)
    								//	->get();
    	$todaydoctor=DB::table('schedules')
    	->join ('weekdays' , 'weekdays.id', '=','schedules.day_id')
    	->join ('doctors' ,'doctors.id' , '=','schedules.doctor_id')
    	->join ('periods' ,'periods.id' , '=','schedules.period_id')
    	->join ('departments' ,'departments.id' , '=','doctors.department_id')
    	->select('schedules.*','doctors.*','periods.*','weekdays.name as wname','departments.name as depname','periods.name as pname')
    	->where('day_id',$today)
    	->get();

    	//$alldoctor = Schedule::all();
    	$alldoctor=DB::table('schedules')
    	->join ('weekdays' , 'weekdays.id', '=','schedules.day_id')
    	->join ('doctors' ,'doctors.id' , '=','schedules.doctor_id')
    	->join ('periods' ,'periods.id' , '=','schedules.period_id')
    	->join ('departments' ,'departments.id' , '=','doctors.department_id')
    	->select('schedules.*','doctors.*','periods.*','weekdays.name as wname','departments.name as depname','periods.name as pname')->get();
    	//dd ($alldoctor);
    	//echo $todaydoctor;
    	return view('frontend.checkdoctorList',compact('todaydoctor','alldoctor','departments'));
    }
}
