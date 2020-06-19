<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    protected $table = "publicacoes";
    protected $fillable = ['ano','titulo','evento','dir_arquivo'];
}
