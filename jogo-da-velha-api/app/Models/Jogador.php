<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    use HasFactory;

    protected $table = 'jogador';

    protected $primaryKey = 'id';
    protected $fillable = [
        'nome_jogador_1',
        'nome_jogador_2',
        'positions',
    ];
}
