<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereço',
        'ativo'
    ];

    public function Livro(){
        return $this->belongsToMany(Livro::class, 'livro_livraria');
    }
}
