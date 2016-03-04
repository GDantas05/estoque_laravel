<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = array('nome', 'valor', 'quantidade', 'descricao', 'dimensoes', 'categoria_id');
    public $timestamps = false;

    public function categoria()
    {
        return $this->belongsTo('estoque\Categoria');
    }
}
