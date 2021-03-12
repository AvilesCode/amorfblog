<?php


namespace App\Clases;


use App\Models\PostModel;

class PostValidations
{
    public function validaSlug($slug, $id = null)
    {
        $existencia = PostModel::where('slug',$slug)->first();
        //dump($existencia == null);
        return $existencia == null;
    }
}
