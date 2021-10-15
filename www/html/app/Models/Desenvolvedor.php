<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desenvolvedor extends Model 
{
    use HasFactory;
    public $table = "desenvolvedores";
    public $timestamps = false;

    protected $fillable = [
        'nome', 'sexo', 'idade', 'hobby', 'dataNascimento'
    ];
}