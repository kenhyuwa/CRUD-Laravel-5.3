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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Untuk mendapatkan data profile yang berelasi dengan User.
     */
    public function Profile()
    {
        return $this->hasOne('App\Profile');
    }

    /**
     * Untuk mendapatkan data kendaraan yang berelasi dengan User.
     */
    public function kendaraans()
    {
        return $this->hasMany(Kendaraan::class);
    }

    /**
     * satu user bisa memiliki lebih dari 1 role
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
