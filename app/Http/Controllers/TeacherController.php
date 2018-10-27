<?php

namespace App\Http\Controllers;
use App\Department;
use App\Faculty;
use App\Position;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $teachers = Teacher::all();
       return view('admin.pages.teachers.teacher',['teachers'=>$teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $dep = Department::all();
         $pos = Position::all();
         $fac = Faculty::all();
         return view('admin.pages.teachers.add',['departments'=>$dep,'positions'=>$pos,'faculties'=>$fac]);
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
            'lastname'=>'required|string|max:255',
            'father_name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'department' =>'required|numeric|min:1',
            'position' =>'required|numeric|min:1',
            'faculty' =>'required|numeric|min:1',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $teacher = new  Teacher();
        $teacher->name = $request->name;
        $teacher->lastname = $request->lastname;
        $teacher->email = $request->email;
        $teacher->father_name = $request->father_name;
        $teacher->department_id = $request->department;
        $teacher->position_id = $request->position;
        $teacher->faculty_id = $request->faculty;
        $teacher->students_numb = 0;

        $teacher->save();
        return redirect()->route('teachers.index');
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
      $teacher = Teacher::findOrFail($id);
      $pos = Position::all();
      $fac = Faculty::all();
      return view('admin.pages.teachers.edit',['teacher'=>$teacher,'faculties'=>$fac,'positions'=>$pos]);
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
        $input = $request->all();
        $validator = Validator::make($input, [
            'name'=>'required|string|max:255',
            'lastname'=>'required|string|max:255',
            'father_name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $teacher = Teacher::findOrFail($id);

        if($input['department']){
            $teacher->department_id = $request->department;
        }
        else{
            $teacher->department_id = $teacher->department_id;
        }

        if($input['faculty']){
        $teacher->faculty_id = $request->faculty;
        }
        else{
            $teacher->faculty_id = $teacher->faculty_id;
        }
        if($input['position']){
            $teacher->position_id = $request->position;
        }
        else{
            $teacher->position_id = $teacher->position_id;
        }

        $teacher->name = $request->name;
        $teacher->lastname = $request->lastname;
        $teacher->email = $request->email;
        $teacher->father_name = $request->father_name;
        $teacher->students_numb = 0;
        $teacher->save();
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $teach = Teacher::findOrFail($id);
         $teach->delete();
         return redirect()->route('teachers.index');
    }
}
