<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Position
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Position whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Position whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Position whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Position whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Position extends Model
{
     protected $fillable = ['name'];

     public function teachers(){
         return $this->hasMany(Teacher::class);
     }
}
