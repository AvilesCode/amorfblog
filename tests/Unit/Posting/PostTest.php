<?php

namespace Tests\Unit\Posting;

use App\Models\PostModel;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    public function testVerPost()
    {
        $infoPosts = PostModel::all();
        dd($infoPosts);
    }
}
