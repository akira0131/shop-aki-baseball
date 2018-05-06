<?php

use Illuminate\Database\Seeder;
use Orchid\Platform\Core\Models\User;

class UsersTableSeeder2 extends Seeder
{
    /**
     * データベース初期値設定実行
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
    }
}
