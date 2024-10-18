<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{

    public function historia(): BelongsTo
    {
        return $this->belongsTo(Historia::class);
    }
    
    use HasFactory;
}
