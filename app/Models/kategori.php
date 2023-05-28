<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

         // untuk memproteksi field id
         protected $guarded = ['kategori_id'];

         // untuk relasi one To Many
         public function game() {
         return $this->hasMany(game::class);
         }
}
