<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $fillable = ['nome'];

    public function historia(): BelongsTo
    {
        return $this->belongsTo(Historia::class);
    }
    use HasFactory;
}
