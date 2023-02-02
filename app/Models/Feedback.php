<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'idservico', 'mensagem', 'nota'
    ];

    public $timestamps = false;
    protected $table = 'feedback';
    protected $primaryKey = 'idfeedback';
}
