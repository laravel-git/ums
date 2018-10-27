<?php

namespace App;
use App\Subject;
use App\Teacher;
use App\Faculty;
use App\Group;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Student
 *
 * @property int $id
 * @property string $name
 * @property string $lastname
 * @property string $father_name
 * @property string $birthday
 * @property string $email
 * @property string $passport
 * @property string $cert_numb
 * @property int $faculty_id
 * @property int $group_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereCertNumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereFacultyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereFatherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student wherePassport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Student extends Model
{
    protected $fillable = ['name','lastname','father_name','email','passport','cert_numb','birthday'];
}
