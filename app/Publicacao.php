<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    protected $table = "publicacoes";
    protected $fillable = ['ano','titulo','autor','dir_arquivo'];
}
