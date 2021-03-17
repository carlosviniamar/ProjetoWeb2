<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conversa extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function cliente(){
        return $this->belongsToMany(Pessoa::class, 'clientes', 'clientes_id');
    }
    public function prestador(){
        return $this->belongsToMany(Pessoa::class, 'prestadores', 'prestadores_id');
    }
}
