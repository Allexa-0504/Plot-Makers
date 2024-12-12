<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag_Historia extends Model
{
    use HasFactory;

    /**
     * As colunas que podem ser preenchidas em massa.
     *
     * @var array
     */
    protected $fillable = [
        'tag_id',       // ID da tag
        'historias_id', // ID da história
    ];
}