<?php


namespace App\Clases;


use App\Models\PostModel;

class AmorfoTest
{
    public function probando()
    {
        $infoPosts = PostModel::all();
        return "Hola Amorfo";
    }
}
