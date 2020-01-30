<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = ['titulo','descricao_curta','descricao_longa','imagem','arquivado','tipo'];

    static function tirarAcentos($string)
    {

        $string = preg_replace("/[áàâãä]/", "a", $string);
        $string = preg_replace("/[ÁÀÂÃÄ]/", "A", $string);
        $string = preg_replace("/[éèê]/", "e", $string);
        $string = preg_replace("/[ÉÈÊ]/", "E", $string);
        $string = preg_replace("/[íì]/", "i", $string);
        $string = preg_replace("/[ÍÌ]/", "I", $string);
        $string = preg_replace("/[óòôõö]/", "o", $string);
        $string = preg_replace("/[ÓÒÔÕÖ]/", "O", $string);
        $string = preg_replace("/[úùü]/", "u", $string);
        $string = preg_replace("/[ÚÙÜ]/", "U", $string);
        $string = preg_replace("/[ç]/", "c", $string);
        $string = preg_replace("/[Ç]/", "C", $string);
        $string = preg_replace("/[][><}{)(:;,!?*%~^`@]/", "", $string);
        $string = preg_replace("/ /", "_", $string);
        return $string;
    }
}
