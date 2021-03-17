<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Contem extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function pessoas(){
        return $this->belongsToMany(Pessoa::class, 'pessoas', 'pessoas_id');

    }
    public function redessociais(){
        return $this->belongsToMany(Pessoa::class, 'redes_sociais', 'redes_sociais_id');
    }

}
