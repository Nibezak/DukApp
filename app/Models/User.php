<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
     // protected $dateFormat = 'Y/m/d';


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getAvatarAttribute($value)
    {
      return asset($value ? 'storage/'.$value : 'images/default-avatar.svg');
    }
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

     public function getAccountTypeAttribute()
          {
            $this->attribute['is_Admin'] = true;
          }
     public function posts()
     {
        return $this->hasMany(Post::class)->orderBy('created_at','DESC');
     }

      public function comments()
      {
        return $this->hasMany(Commnet::class);
      }

}
