<?php

namespace App\Http\Controllers\Auth;

use App\Faculty;
use App\Group;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'faculty' => 'required|string|max:255',
            'group' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'cert_numb' => 'required|string|max:255',
            'passport_numb' => 'required|string|max:255',
            'passport_ser' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $group = Group::find($data['group']);
        $group->students_numb ++;
        $faculty = Faculty::find($data['faculty']);
        $faculty->students_numb ++;
        $faculty->save();
        $group->save();
        return User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'faculty_id' => $data['faculty'],
            'group_id' => $data['group'],
            'father_name' => $data['father_name'],
            'passport' => $data['passport_ser']."".$data['passport_numb'],
            'cert_numb' => $data['cert_numb'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
