<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    /**
     * 
     * Relacion uno a muchos con la tabla posts
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function posts(){
        return $this->hasMany(Posts::class);
     }
}
