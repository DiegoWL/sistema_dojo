<?php

use Illuminate\Database\Seeder;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Akynbo::class, 50)->create()->each(function ($u) {
        $u->posts()->save(factory(App\Post::class)->make());
        });
    }
}
