<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * データベース初期値設定実行
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            AttachmentsTableSeeder::class,
            MenusTableSeeder::class,
            //PagesTableSeeder::class,
            //PostsTableSeeder::class,
            RolesTableSeeder::class,
            SettingsTableSeeder::class,
            TermsTableSeeder::class,
        ]);
    }
}
