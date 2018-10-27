<?php

namespace App;
use App\Student;
use App\Faculty;
use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Group
 *
 * @property int $id
 * @property string $name
 * @property int $faculty_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Faculty $faculty
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereFacultyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $students_numb
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereStudentsNumb($value)
 */
class Group extends Model
{
    protected $fillable = ['name'];

    public function users(){
        return $this->hasMany(User::class);
    }
    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
}
