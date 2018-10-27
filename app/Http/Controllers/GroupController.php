<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $groups = Group::all();
         return view('admin.pages.groups.groups',['groups'=>$groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fac = Faculty::all();
        return view('admin.pages.groups.add',['faculties'=>$fac]);
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
        $gr = new  Group();
        $gr->name = $request->name;
        $gr->faculty_id = $request->faculty;
        $gr->save();
        return redirect()->route('groups.index');

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
         $gr = Group::findOrFail($id);
         $fac = Faculty::all();
         return view('admin.pages.groups.edit',['group'=>$gr,'faculties'=>$fac]);
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
            'name'=>'required',
            'faculty'=>'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $gr = Group::findOrFail($id);
        if($input['faculty']){
            $gr->faculty_id = $request->faculty;
            $gr->name = $request->name;
        }
        else{
            $gr->faculty_id = $gr->faculty_id;
            $gr->name = $request->name;
        }

        $gr->save();
        return redirect()->route('groups.index');
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
