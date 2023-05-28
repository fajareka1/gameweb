<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class games extends Model
{
    use HasFactory;
    protected $guarded = ['game_id'];


    public function kategori() {
        return $this->belongsTo(Role::class, 'kategori_id');
    }
    public function profil()
    {
    	return $this->belongsToMany('App\profil');
    }
}
