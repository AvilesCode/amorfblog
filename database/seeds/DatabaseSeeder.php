<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * Ejecutar una: php artisan db:seed --class=LogEventosAdminSeedes
     * Ejecutar todas: php artisan db:seed
     *
     * Migrates
     * php artisan migrate
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostSeeder::class);
    }
}
