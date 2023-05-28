<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // untuk relasi one To Many
    public function users() {
        return $this->hasMany(User::class);
    }
    public function games() {
        return $this->hasMany(games::class);
    }
}
