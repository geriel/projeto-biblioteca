<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    use HasFactory;
    protected $fillable = ['nome','representante','telefone'];

    public function livros(){
        return $this->belongsToMany(Livro::class,'editora_id','id');
    }
}