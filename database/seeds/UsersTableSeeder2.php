<?php

use Illuminate\Database\Seeder;
use Orchid\Platform\Core\Models\User;

class UsersTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
    }
}
