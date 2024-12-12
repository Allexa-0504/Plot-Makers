<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        'data_postada',    // Data em que a história foi postada
        'destaque',        // Flag para destacar a história
        'capa',            // Caminho para a imagem de capa
    ];

    protected $casts = [
        'data_postada' => 'datetime',
    ];
    
    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'historia_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tags_historias', 'historia_id', 'tag_id');
    }
    public function genero(): BelongsTo
    {
        return $this->belongsTo(Genero::class);
    }
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id'); 
    }

    use HasFactory;
}
