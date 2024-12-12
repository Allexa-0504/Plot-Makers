<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tag extends Model
{
    use HasFactory;

    /**
     * As colunas que podem ser preenchidas em massa.
     *
     * @var array
     */
    protected $fillable = [
        'nome', // Nome da tag
    ];

    public function historias()
    {
        return $this->belongsToMany(Historia::class, 'tags_historias', 'tag_id', 'historia_id');
    }
}