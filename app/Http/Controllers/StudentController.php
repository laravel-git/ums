<?php

namespace App\Http\Controllers;
use App\Faculty;
use App\Group;
use Illuminate\Support\Facades\Session;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::all();
        $groups = Group::all();
        return view('site.pages.student',['faculties'=>$faculties,'groups'=>$groups]);
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
        $student = new Student();

        $student->name = $request->name;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->father_name = $request->father_name;
        $student->passport = $request->passport_ser."".$request->passport_numb;
        $passport = $request->passport_ser."".$request->passport_numb;
        $student->faculty_id = 1;
        $student->group_id = 1;
        $student->cert_numb = $request->cert_numb;
        $request->session()->put('student_passport',"salom");
        Session::save();
        $student->save();
        return view('site.pages.student');
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
}
