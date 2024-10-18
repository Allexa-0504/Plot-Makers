<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    public function comentario(): HasMany
    {
        return $this->hasMany(Comentario::class);
    }
    public function tag(): HasMany
    {
        return $this->hasMany(Tag::class);
    }
    public function genero(): HasMany
    {
        return $this->hasMany(Genero::class);
    }

    use HasFactory;
}
