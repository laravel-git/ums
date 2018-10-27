<?php

namespace App;
use App\Teacher;
use App\Faculty;
use App\Student;
use App\Department;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Subject
 *
 * @property int $id
 * @property string $name
 * @property int $department_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Department $department
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Faculty[] $faculties
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Teacher[] $teachers
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $students_numb
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject whereStudentsNumb($value)
 */
class Subject extends Model
{
    protected $fillable = ['name'];

    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function faculties(){
        return $this->belongsToMany(Faculty::class);
    }



}
