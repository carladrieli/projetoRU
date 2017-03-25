<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = "tipo_usuario";

    protected $fillable = ['descricao', 'ativo'];

    public function usuario()
    {
      return $this->hasMany(Usuario::class);
    }

    
}
