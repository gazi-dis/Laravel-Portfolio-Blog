<?php

use Illuminate\Database\Seeder;

class ProjectsAdd extends Seeder
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
                'slug' => 'projects-content',
                'title' => 'Web Design',
                'content' => 'Branding & Illustration Design',
                'media' => 'work-2.jpg',
            ],
            [
                'slug' => 'projects-content',
                'title' => 'Web Design',
                'content' => 'Branding & Illustration Design',
                'media' => 'work-2.jpg',
            ],
            [
                'slug' => 'projects-content',
                'title' => 'Web Design',
                'content' => 'Branding & Illustration Design',
                'media' => 'work-2.jpg',
            ],
            [
                'slug' => 'projects-content',
                'title' => 'Web Design',
                'content' => 'Branding & Illustration Design',
                'media' => 'work-2.jpg',
            ],
            [
                'slug' => 'projects-content',
                'title' => 'Web Design',
                'content' => 'Branding & Illustration Design',
                'media' => 'work-2.jpg',
            ],
            [
                'slug' => 'projects-content',
                'title' => 'Web Design',
                'content' => 'Branding & Illustration Design',
                'media' => 'work-2.jpg',
            ],
        ]);
    }
}
