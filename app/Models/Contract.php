<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public $timestamps = false;
    protected $table = 'servico';
    protected $primaryKey = 'idservico';
    protected $fillable = [
        'idusuario', 'idplano', 'ativo', 'data'
    ];
}
