<?php

use App\Student;
use App\Subject;
use App\Faculty;
use App\Teacher;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
Route::get('/select',function (){
    $fac_id =Input::get('fac_id');
    $groups = \App\Group::where('faculty_id','=',$fac_id)->get();
    return Response::json($groups);
})->name('sel');


Route::name('site.')->middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('site.pages.index');
    })->name('index');

    Route::get('/faculty', function () {
        return view('site.pages.faculty');
    })->name('faculty');

    Route::get('/teacher', function () {
    $user = \Illuminate\Support\Facades\Auth::user();
    $fac_id =  $user['faculty_id'];


        return view('site.pages.teacher');
    })->name('teacher');

    Route::get('/student','StudentController@index')->name('student');

   Route::get('/select','FacultyController@select')->name('select');

//   Route::get('/dep',function (){
//        $fac_id =Input::get('fac_id');
//        $departments = \App\Department::where('faculty_id','=',$fac_id)->get();
//        return Response::json($departments);
//    })->name('dep');

    Route::get('/news', function () {
        return view('site.pages.news');
    })->name('news');
});


//Route::get('/sub/{id}',function ($id){
//
//        $subject = \App\Subject::find($id);
//        $dep_id = $subject->department_id;
//        $fac = \App\Faculty::all();
//        $teachers = \App\Teacher::where('department_id','=',$dep_id)->get();
//        return view('admin.pages.subjects.faculties',['teachers'=>$teachers,'faculties'=>$fac,'subject'=>$subject]);
//})->name('subject.faculty');
//Route::post('/sub/fac/{id}',function (Request $request,$id){
//        $faculties = $request->faculties;
//        $teachers = $request->teachers;
//        $subject = \App\Subject::find($id);
//        $subject->faculties()->sync($faculties);
//        $subject->teachers()->sync($teachers);
//        return "Ishladi";
//
//})->name('subject.faculties');
//
//

Route::prefix('admin')->group(function () {
    Route::get('','UserController@index')->name('admin.index');
    Route::resource('/users','UserController');
    Route::resource('/students','StudentController');
    Route::resource('/teachers','TeacherController');
    Route::resource('/subjects','SubjectController');
    Route::resource('/faculties','FacultyController');
    Route::resource('/groups','GroupController');
    Route::resource('/departments','DepartmentController');
    Route::resource('/news','NewsController');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
