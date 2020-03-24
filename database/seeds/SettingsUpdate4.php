<?php

use Illuminate\Database\Seeder;

class SettingsUpdate4 extends Seeder
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
                'option' => 'Disqus Script Kodları',
                'slug' => 'comment-script',
                'value' => 'Please enter disqus script',
            ],
            [
                'option' => 'Admin Mail Adresi',
                'slug' => 'admin-mail',
                'value' => 'admin@mail.com',
            ],
            [
                'option' => 'CV Bölümü Var Mı ?',
                'slug' => 'cv-bool',
                'value' => '1',
            ],
            [
                'option' => 'CV Dosyası',
                'slug' => 'cv-document',
                'value' => 'cv.docx',
            ],
            [
                'option' => 'Admin Linki Var Mı?',
                'slug' => 'admin-link',
                'value' => '1',
            ],
            [
                'option' => 'Favicon Dosyası',
                'slug' => 'favicon',
                'value' => 'favicon.png',
            ],
            [
                'option' => 'Yönetim Paneli Başlığı',
                'slug' => 'dashboard-title',
                'value' => 'Yönetim',
            ],
        ]);
    }
}
