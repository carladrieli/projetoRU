<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTicket extends Model
{
    protected $table = "tipo_ticket";

    protected $fillable = ['valor', 'descricao','qtd_dia_expirar', 'ativo', 'data_hora_atualizacao'];

    public function usuarioTicket()
    {
      return $this->hasMany(UsuarioTicket::class);
    }
}
