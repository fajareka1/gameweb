<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class profil extends Model
{
    use HasFactory;
    // untuk memproteksi field id
    protected $guarded = ['id'];
    public function users(){
        return $this->hasOne(User::class);
    }
    public function games()
    {
    	return $this->belongsToMany('App\games');
    }
}
