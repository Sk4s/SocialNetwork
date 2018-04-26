<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'firstname', 'lastname', 'adress', 'postal_code', 'city', 'email', 'mobile', 'phone', 'linkedin', 'github', 'website', 'profile_picture', 'set_avatar', 'cv', 'ilanguage', 'language', 'tool', 'know_how', 'expertise', 'bio', 'password'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts() {
        return $this->hasMany('App\Post');
    }
    public function categories() {
        return $this->hasMany('App\Category');
    }
    public function likes() {
        return $this->hasMany('App\Like');
    }
}
