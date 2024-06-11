<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'auth_token','parent','admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function children() {
        return $this->hasMany(User::class, 'parent');
    }

    public function permissions() {
        return $this->hasManyThrough(Permission::class, Site::class)->get()->keyBy('site_id');
    }

    public function sites() {
        return $this->hasMany(Site::class);
    }

}
