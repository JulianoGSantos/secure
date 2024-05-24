<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'isbn',
        'valor'
    ];

    public function livraria(){
        return $this->belongsToMany(Livraria::class, 'livro_livraria');
    }
}
