<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotivoFaleConosco extends Model
{
    protected $table = "motivo_fale_conosco";

    protected $fillable = ['descricao'];

    public function faleConosco()
    {
      return $this->hasMany(FaleConosco::class);
    }

}
