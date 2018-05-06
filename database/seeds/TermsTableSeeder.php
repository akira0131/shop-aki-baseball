<?php

use Illuminate\Database\Seeder;
use Orchid\Platform\Core\Models\Term;
use Orchid\Platform\Core\Models\Taxonomy;

class TermsTableSeeder extends Seeder
{
    /**
     * データベース初期値設定実行
     *
     * @return void
     */
    public function run()
    {
        factory(Term::class, 20)->create()->each(function ($u) {
            $u->taxonomy()->saveMany(factory(Taxonomy::class, 1)->make());
        });
    }
}
