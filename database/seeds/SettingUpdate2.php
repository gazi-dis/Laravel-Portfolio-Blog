<?php

use Illuminate\Database\Seeder;

class SettingUpdate2 extends Seeder
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
                'option' => 'Teklif Açıklama',
                'slug' => 'hire-info',
                'value' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
            ],
            [
                'option' => 'Teklif Link',
                'slug' => 'hire-link',
                'value' => 'https://instagram.com',
            ],
            [
                'option' => 'Hizmetler Açıklaması',
                'slug' => 'services-info',
                'value' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia',
            ],
            [
                'option' => 'Projeler Açıklaması',
                'slug' => 'projects-info',
                'value' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia',
            ],
            [
                'option' => 'İletişim Açıklama',
                'slug' => 'contact-info',
                'value' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia',
            ],
            [
                'option' => 'Footer Açıklama',
                'slug' => 'footer-info',
                'value' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            ],
            [
                'option' => 'Facebook Link',
                'slug' => 'face-link',
                'value' => 'https://facebook.com',
            ],
            [
                'option' => 'İnstagram Link',
                'slug' => 'ig-link',
                'value' => 'https://instagram.com',
            ],
            [
                'option' => 'Twitter Link',
                'slug' => 'twitter-link',
                'value' => 'https://twitter.com',
            ],
            [
                'option' => 'Kişisel Site Link',
                'slug' => 'personal-link',
                'value' => 'https://google.com',
            ],
            [
                'option' => 'Yetenek 1',
                'slug' => 'hobby-1',
                'value' => 'Developer.',
            ],
            [
                'option' => 'Yetenek 2',
                'slug' => 'hobby-2',
                'value' => 'Web Designer.',
            ],
            [
                'option' => 'Yetenek 3',
                'slug' => 'hobby-3',
                'value' => 'Marketer.',
            ],
            
        ]);
    }
}
