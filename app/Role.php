<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $table = 'roles';
	protected $fillable = ['nama_role', 'created_at', 'updated_at'];
	
    /**
     * satu role dapat dimiliki oleh banyak user.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
