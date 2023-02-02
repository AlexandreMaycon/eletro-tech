<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'nome', 'valor', 'descricao'
    ];

    protected $table = 'plano';
    protected $primaryKey = 'idplano';
    public $timestams = false;
}
