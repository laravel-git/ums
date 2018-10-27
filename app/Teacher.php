<?php

namespace App;
use App\Student;
use App\Subject;
use App\Faculty;
use App\Department;
use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Teacher
 *
 * @property int $id
 * @property string $name
 * @property string $lastname
 * @property string $father_name
 * @property string $email
 * @property int $department_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Department $department
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Subject[] $subjects
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereFatherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $students_numb
 * @property int $position_id
 * @property int $faculty_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereFacultyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereStudentsNumb($value)
 */
class Teacher extends Model
{
    protected $fillable = ['name','lastname','father_name','email','passport','birthday'];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
    public function position(){
        return $this->belongsTo(Position::class);
    }




}
