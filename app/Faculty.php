<?php

namespace App;
use App\Student;
use App\User;
use App\Department;
use App\Group;
use App\Subject;
use App\Teacher;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Faculty
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Department[] $departments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Group[] $groups
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Subject[] $subjects
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faculty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faculty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faculty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faculty whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $students_numb
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Teacher[] $teachers
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faculty whereStudentsNumb($value)
 */
class Faculty extends Model
{
    protected $fillable = ['name'];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function departments(){
        return $this->hasMany(Department::class);
    }

    public function groups(){
        return $this->hasMany(Group::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }

}
