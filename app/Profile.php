<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'jenis_kelamin', 'alamat', 'no_telp', 'user_id',
    ];

    /**
     * Sembunyikan data yang tidak boleh diakses umum.
     *
     * @var array
     */
    protected $hidden = [
        'alamat', 'no_telp',
    ];

    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
