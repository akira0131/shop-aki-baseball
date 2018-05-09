<?php

namespace App\Http\Forms\Settings;

use App\Forms\FormGroup;
use App\Events\SettingsEvent;

/**
 * 共通定義
 *
 */
class SettingFormGroup extends FormGroup
{
    /**
     * ビューテンプレートへのパス
     *
     * @var string
     */
    public $view = 'dashboard.systems.settings.index';

    /**
     * @var
     */
    public $event = SettingsEvent::class;

    /**
     * 値を設定
     *
     * @return array
     */
    public function attributes() : array
    {
        return [
            // コンテンツタイトル
            'name'        => trans('dashboard::systems/settings.Settings'),

            // コンテンツ説明文
            'description' => trans('dashboard::systems/settings.GlobalSystemSettings'),
        ];
    }
}
