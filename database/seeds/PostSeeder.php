<?php

use App\Models\PostModel;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posting = PostModel::create([
            'id' => 1,
            'title' => "Hola Amorfo",
            'slug' => "primer-post",
            'content' => "Lorem ipsum dolor sit amet consectetur adipiscing elit montes vestibulum, pulvinar inceptos nostra consequat hac eu tempus mauris lectus, venenatis eget cursus potenti sapien dis hendrerit etiam. Sapien suscipit eu mollis id venenatis maecenas magnis mattis felis morbi lectus ut, vulputate pulvinar nam arcu nisi luctus ligula porttitor vestibulum est. Cras aptent nisi pulvinar at vehicula ligula pharetra fermentum justo posuere, morbi aenean massa pellentesque tempus fusce cursus diam fames, natoque non enim metus ac phasellus dictumst sagittis facilisis."
        ]);
    }
}
