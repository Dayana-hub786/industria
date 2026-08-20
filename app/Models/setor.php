<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Equipamento;

class setor extends Model
{
    protected $table = 'setores';
    protected $fillable = ['nome'];

    public function equipamentos(){
        return $this->hasMany(Equipamentos::class);
    }
}
