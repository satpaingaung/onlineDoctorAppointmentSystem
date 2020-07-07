<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Period;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $periods=Period::all(); 
        
        return view('backend.periods.index',compact('periods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.periods.create');
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
         $period=new Period;
        $period->name=$request->name;
        $period->start_time=$request->start_time;
        $period->end_time=$request->end_time;
        $period->save();

        //return
        return redirect()->route('periods.index');
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
        $period=Period::find($id);
        //dd($category);
        return view('backend.periods.edit',compact('period'));
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
        $request->validate(['name'=> 'required|min:5|max:191',
            'start_time'=>'required',
            'end_time'=>'required']);

       
        //data update
        $period=Period::find($id);
        $period->name=$request->name;
        $period->start_time=$request->start_time;
        $period->end_time=$request->end_time;
        $period->save();

        //return
        return redirect()->route('periods.index');
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
       $period=Period::find($id);
        $period->delete();
        return redirect()->route('periods.index'); 
    }
}
