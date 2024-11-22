<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios';

    protected $fillable = [
        'usuario_id',
        'historia_id',
        'avaliacao', 
        'conteudo',
        'data_post',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function historia()
    {
        return $this->belongsTo(Historia::class, 'historia_id');
    }
}