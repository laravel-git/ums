<?php

namespace App\Http\Controllers;

use App\Department;
use App\Faculty;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects =Subject::all();
        return view('admin.pages.subjects.subjects',['subjects'=>$subjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Faculty::all();
        $dep = Department::all();
        return view('admin.pages.subjects.add',['faculties'=>$faculties,'departments'=>$dep]);
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
            'name'=>'required|string|max:255',
            'department' =>'required|numeric|min:1',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $subject = new  Subject();
        $subject->name = $request->name;
        $subject->department_id = $request->department;
        $subject->students_numb = 0;
        $subject->save();
        return redirect()->route('subjects.index');

        return redirect()->route('subjects.index');
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

    }
}
