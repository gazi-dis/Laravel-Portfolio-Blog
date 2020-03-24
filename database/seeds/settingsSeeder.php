<?php

use Illuminate\Database\Seeder;

class settingsSeeder extends Seeder
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
                'option' => 'Başlık',
                'slug' => 'title',
                'value' => 'Portfolio',
            ],
            [
                'option' => 'İsim',
                'slug' => 'name',
                'value' => 'Name',
            ],
            [
                'option' => 'Soyisim',
                'slug' => 'surname',
                'value' => 'Surname',
            ],
            [
                'option' => 'Giriş Kısmı',
                'slug' => 'entry',
                'value' => '1',
            ],
            [
                'option' => 'Hakkında',
                'slug' => 'about',
                'value' => '1',
            ],
            [
                'option' => 'Hizmetler',
                'slug' => 'services',
                'value' => '1',
            ],
            [
                'option' => 'Projeler',
                'slug' => 'projects',
                'value' => '1',
            ],
            [
                'option' => 'Hire Me',
                'slug' => 'hire',
                'value' => '1',
            ],
            [
                'option' => 'İletişim',
                'slug' => 'contact',
                'value' => '1',
            ],
        ]);
    }
}
