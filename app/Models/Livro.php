<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = ['autor_id','editora_id','genero','titulo','lancamento'];

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_id','id');
    }

    public function editora()
    {
        return $this->belongsTo(Editora::class,'editora_id','id');
    }
}
