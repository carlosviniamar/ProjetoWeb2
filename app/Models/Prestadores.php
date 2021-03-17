<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestadores extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function endereco()
    {
        return $this->hasMany(Produtos::class, 'endereco_id');
    }


}



