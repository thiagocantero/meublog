<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'quantidade', 'descricao'
    ];

    /**
     * Mutator para a Coluna Nome
     * quando o nome será salvo, ele será convertido em caixa alta.
     */
   
    public function setNomeAttribute($value)
    {
        $this->attributes['nome'] = strtoupper($value);
    }

     /**
     * Accessor para a Coluna Nome
     * quando o nome será exibido, ele será convertido em caixa baixa.
     */
    public function getNomeAttribute($value)
    {
        return strtolower($value);
    }
}
