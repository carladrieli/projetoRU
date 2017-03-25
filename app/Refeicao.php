<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
    protected $table = "refeicao";

    protected $fillable = ['data_horario', 'usuario_ticket_id'];

    public function dono()
    {
      return $this->belongsTo(UsuarioTicket::class);
    }
}
