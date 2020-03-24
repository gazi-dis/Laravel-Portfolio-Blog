<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([      

            settingsSeeder::class,
            AboutSeeder::class,
            ContentsSeeder::class,
            ProjectsAdd::class,
            SettingUpdate2::class,
            SettingsUpdate3::class,
            SettingsUpdate4::class,
            FirstAdminInfo::class,
        ]);
    }
}
