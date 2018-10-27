<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::all();
        return view('admin.pages.faculties.faculty',['faculties'=>$faculties]);
    }


        public function select(Request $request){
        if ($request->ajax()){
            $output = "";
               $groups = DB::table('groups')->where('faculty_id','=',$request->faculty);
               if($groups){
                   foreach ($groups as $group){
                       $output .= '<option value='.$group->id.'>'.$group->name.'</option>';
                   }
                   return Response($output);
               }else {
                   $output .='<option>'.'Not Found'.'</option>';
                return Response($output);
               }
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.faculties.add');
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
            'name'=>'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $fac = new Faculty();
        $fac->name = $request->name;
        $fac->save();
        return redirect()->route('faculties.index');
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
        $fac = Faculty::findOrFail($id);
        return view('admin.pages.faculties.edit',['faculty'=>$fac]);
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
            'name'=>'required'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $fac = Faculty::findOrFail($id);
        $fac->name = $request->name;
        $fac->save();
        return redirect()->route('faculties.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fac = Faculty::findOrFail($id);
        $fac->delete();
        return redirect()->route('faculties.index');
    }
}
