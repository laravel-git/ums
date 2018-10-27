<?php

namespace App;
use App\Faculty;
use App\Subject;
use App\Teacher;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Department
 *
 * @property int $id
 * @property string $name
 * @property int $faculty_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Faculty $faculty
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Subject[] $subjects
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Teacher[] $teachers
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Department whereFacultyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Department whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Department extends Model
{

    protected $fillable = ['name'];

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    public function teachers(){
        return $this->hasMany(Teacher::class);
    }


}
