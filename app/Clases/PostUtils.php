<?php


namespace App\Clases;


use Illuminate\Support\Str;

class PostUtils
{
    public static function formateadorSlug($titulo, $slugExistente = true)
    {
        if($slugExistente)
        {
            $articulos = ['el','la','los','las','en','una','unos','a','de'];
            $slug = str_replace($articulos, "", $titulo);
            $slug .= Str::random();
        }
        else
        {
            $articulos = ['el','la','los','las','en','una','unos','a','de'];
            $slug = str_replace($articulos, "", $titulo);
        }
        //dump($slug);
        return str_replace(' ', '-', $slug);
    }
}
