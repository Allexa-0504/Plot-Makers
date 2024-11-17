<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    /**
     * A tabela associada ao modelo.
     *
     * @var string
     */
    protected $table = 'historias'; // Nome da tabela no banco de dados

    /**
     * As colunas que podem ser preenchidas em massa.
     *
     * @var array
     */
    protected $fillable = [
        'usuario_id',      // ID do usuário que criou a história
        'genero_id',       // ID do gênero associado
        'titulo',          // Título da história
        'conteudo',        // Conteúdo principal
        'descricao',       // Descrição da história
        'classificacao',   // Classificação etária
        'data_postada',    // Data em que a história foi postada
        'destaque',        // Flag para destacar a história
        'capa',            // Caminho para a imagem de capa
    ];
    
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
