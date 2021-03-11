<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'title',
        'slug',
        'content'
    ];
}
