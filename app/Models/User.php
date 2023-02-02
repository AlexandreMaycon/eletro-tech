<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    public $timestamps = false;
    protected $table = 'usuario';
    protected $primaryKey = 'idusuario';
    protected $fillable = [
        'cpf', 'email', 'password', 
        'endereco', 'telefone', 'nome', 'idusuario'
    ];
}
