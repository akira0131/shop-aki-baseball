<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * データベース初期値設定実行
     *
     * @return void
     */
    public function run()
    {
        // DatabaseSeeder.phpを使用せず単体で実行する場合必要
        //Eloquent::unguard();
        // 全部消す
        //DB::table('users')->delete();
        // 開発用のユーザー追加
        //DB::table('users')->insert([
        //    [
        //        'name' => 'aki',
        //        'email' => 'bluesky.ar131@gmail.com',
        //        'password' => bcrypt('123456'),
        //    ],
        //]);
        
        factory(User::class, 10)->create();
    }
}
