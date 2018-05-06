<?php

use Illuminate\Database\Seeder;
use Orchid\Platform\Core\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * データベース初期値設定実行
     *
     * @return void
     */
    public function run()
    {
        $MenuTypes = ['header', 'sidebar', 'footer'];

        foreach ($MenuTypes as $MenuType) {
            $Type = ['type' => $MenuType];

            factory(Menu::class, 5)->create($Type)->each(function ($u) use ($Type) {
                $u->children()->saveMany(factory(Menu::class, 2)->create($Type)
                    ->each(function ($p) use ($Type) {
                        $p->children()->saveMany(factory(Menu::class, 2)->make($Type));
                    }));
            });
        }
    }
}
