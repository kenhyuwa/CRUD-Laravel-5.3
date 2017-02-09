<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
	protected $table = 'kotas';
	protected $fillable = ['nama_kota'];

    /**
     * Untuk mendapatkan semua kendaraan melalui model Kota.
     * Jika table kalian mengikuti konvensi dari Laravel
     * Maka pakai yang di bawah ini
     * Konvensi tsb yaitu nama Foreign key nya user_id, post_id, dll
     * dan Primary key nya id
     */
    public function kendaraans()
    {
        return $this->hasManyThrough(Kendaraan::class, User::class);
    }

    /**
     * Jika tidak mengikuti konvensi Laravel
     */
    public function kendaraan()
    {
        return $this->hasManyThrough(
            'App\Kendaraan', 'App\User',
            'kode_kota', // foreign key di table users misalnya
            'user_kode', // foreign key di table kendaraans misalnya
            'kode_user' // foreign key di table users misalnya
        );
    } 
}
