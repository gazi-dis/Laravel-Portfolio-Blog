<?php

use Illuminate\Database\Seeder;

class SettingsUpdate3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'option' => 'Yorumlar Açık mı?',
                'slug' => 'bool-comment',
                'value' => '1',
            ],
            [
                'option' => 'Blog',
                'slug' => 'blog',
                'value' => '1',
            ],
            [
                'option' => 'Blog Açıklama',
                'slug' => 'blog-info',
                'value' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia',
            ],
            [
                'option' => 'Blog Yazarı',
                'slug' => 'blog-author',
                'value' => '1',
            ],
        ]);
    }
}
