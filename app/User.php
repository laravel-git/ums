<?php

namespace App;
use App\Subject;
use App\Teacher;
use App\Faculty;
use App\Group;
use App\News;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $lastname
 * @property string $father_name
 * @property string $passport
 * @property int $faculty_id
 * @property int $group_id
 * @property string $cert_numb
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Faculty $faculty
 * @property-read \App\Group $group
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Subject[] $subjects
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Teacher[] $teachers
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCertNumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFacultyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFatherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\News[] $news
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lastname','father_name','passport','cert_numb','faculty','group'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }
    public function news(){
        return $this->hasMany(News::class);
    }

    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
    public function group(){
        return $this->belongsTo(Group::class);
    }

}
