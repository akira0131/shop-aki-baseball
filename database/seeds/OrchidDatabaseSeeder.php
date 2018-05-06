<?php

use Illuminate\Database\Seeder;

class OrchidDatabaseSeeder extends Seeder
{
    /**
     * データベース初期値設定実行
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //AttachmentsTableSeeder::class,
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            SettingsTableSeeder::class,
            TermsTableSeeder::class,
            MenusTableSeeder::class,
            //PagesTableSeeder::class,
            //PostsTableSeeder::class,
        ]);
    }
}
