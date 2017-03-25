<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaleConosco extends Model
{
    protected $table = "fale_conosco";

    protected $fillable = ['mensagem', 'usuario_id', 'motivo_fale_conosco_id'];

    public function donoUsuario()
    {
      return $this->belongsTo(Usuario::class);
    }

    public function donoMotivo()
    {
      return $this->belongsTo(MotivoFaleConosco::class);
    } 

}
