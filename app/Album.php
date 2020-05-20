<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albuns';

    protected $fillable = ['titulo_album','descricao_album','capa','fotos','extensao','quantidade'];
}
