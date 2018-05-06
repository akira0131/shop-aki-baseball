<?php

use Illuminate\Database\Seeder;
use Orchid\Platform\Core\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * データベース初期値設定実行
     *
     * @return void
     */
    public function run()
    {
        factory(Role::class, 5)->create();
    }
}
