<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioTicket extends Model
{
    protected $table = "usuario_ticket";

    protected $fillable = ['data_validade', 'ativo', 'usuario_id', 'tipo_ticket_id'];

    public function donoUsuario()
    {
      return $this->belongsTo(Usuario::class);
    }

    public function donoTipoTicket()
    {
      return $this->belongsTo(TipoTicket::class);
    }    
}
