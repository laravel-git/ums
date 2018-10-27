<?php

namespace App\Http\Controllers;

use App\Department;
use App\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('admin.pages.departments.departments',['departments'=>$departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Faculty::all();
        return view('admin.pages.departments.add',['faculties'=>$faculties]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name'=>'required',
            'faculty' =>'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
         $dep = new  Department();
         $dep->name = $request->name;
         $dep->faculty_id = $request->faculty;
         $dep->save();
         return redirect()->route('departments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dep = Department::findOrFail($id);
        $fac = Faculty::all();
        return view('admin.pages.departments.edit',['department'=>$dep,'faculties'=>$fac]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name'=>'required',
            'faculty'=>'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $dep = Department::findOrFail($id);
         if($input['faculty']){
             $dep->faculty_id = $request->faculty;
             $dep->name = $request->name;
         }
         else{
             $dep->faculty_id = $dep->faculty_id;
             $dep->name = $request->name;
         }

            $dep->save();
         return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dep = Department::findOrFail($id);
        $dep->delete();
        return redirect()->route('departments.index');
    }
}
