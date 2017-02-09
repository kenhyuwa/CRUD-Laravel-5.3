<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'kendaraans';
    protected $fillable = [
    	'nama_kendaraan',
		'jenis_kendaraan',
		'buatan',
		'created_at',
		'user_id',
		'updated_at'
    ];

    /**
     * Untuk mendapatkan data users yang berelasi dengan kendaraan.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
