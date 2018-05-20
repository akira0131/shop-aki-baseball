<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * アプリケーションサービスの初期化処理
     *
     * @return void
     */
    public function boot()
    {
        /**
         * キャッシュ・ヒット対策:
         * CSS,Jsなどのファイルを更新した際にWEBサーバ側で新たにキャッシュされるように
         * ファイル読み込み時に、タイムスタンプをパラメータとして渡す
         *
         * @param $filePath
         * @return linkエレメント, scriptエレメント
         */
        \Blade::directive('loadAsset', function ($filePath) {

            // シングルクォーテーション除去
            $filePath = str_replace('\'', '', $filePath);

            // ファイルパス取得
            $path = public_path($filePath);

            // タイムスタンプ取得
            $timeStamp = \File::lastModified($path);

            // ファイルURL取得
            $fileUrlPath = asset($filePath);

            // ファイル拡張子取得
            $ext = substr($path, strrpos($path, '.') + 1);

            switch ($ext) {
                case 'css':
                    return "<link href=\"".$fileUrlPath."?date=".$timeStamp."\" rel=\"stylesheet\" type=\"text/css\" >";
                    break;
                case 'js':
                    return "<script src=\"".$fileUrlPath."?date=".$timeStamp."\" type=\"text/javascript\"></script>";
                    break;
            }
        });
    }

    /**
     * アプリケーションサービスの登録
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
