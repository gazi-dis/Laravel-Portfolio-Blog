<?php

use Illuminate\Database\Seeder;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            [
                'slug' => 'services-content',
                'title' => 'Web Design',
                'content' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
                'media' => 'flaticon-layers',
            ],
            [
                'slug' => 'services-content',
                'title' => 'Phtography',
                'content' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
                'media' => 'flaticon-layers',
            ],
            [
                'slug' => 'services-content',
                'title' => 'Web Developer',
                'content' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
                'media' => 'flaticon-layers',
            ],
            [
                'slug' => 'services-content',
                'title' => 'App Developing',
                'content' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
                'media' => 'flaticon-layers',
            ],
            [
                'slug' => 'services-content',
                'title' => 'Branding',
                'content' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
                'media' => 'flaticon-layers',
            ],
            [
                'slug' => 'services-content',
                'title' => 'Product Strategy',
                'content' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
                'media' => 'flaticon-layers',
            ],
        ]);
    }
}
