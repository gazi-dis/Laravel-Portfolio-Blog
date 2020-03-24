<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
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
                'option' => 'E Posta',
                'slug' => 'email',
                'value' => 'example@mail.com',
            ],
            [
                'option' => 'Telefon',
                'slug' => 'phone',
                'value' => '05410000000',
            ],
            [
                'option' => 'Doğum Tarihi',
                'slug' => 'birthday',
                'value' => '01.01.2000',
            ],
            [
                'option' => 'Adres',
                'slug' => 'adress',
                'value' => 'Lorem İpsum Street USA',
            ],
            [
                'option' => 'Toplam Proje',
                'slug' => 'total-projects',
                'value' => '12',
            ],
            [
                'option' => 'Hakkımda Açıklama',
                'slug' => 'bio-info',
                'value' => 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir.',
            ],
            [
                'option' => 'Hakkımda Resim',
                'slug' => 'bio-image',
                'value' => 'about.jpg',
            ],
        ]);
    }
}
