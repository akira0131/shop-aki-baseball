<?php

declare(strict_types=1);

namespace App\Http\Forms\Settings;

use App\Models\Setting;
use App\Forms\Form;
use Illuminate\Contracts\View\View;

class BaseSettingsForm extends Form
{
    /**
     * @var string
     */
    public $name = 'Settings';

    /**
     * Base Model.
     *
     * @var
     */
    protected $model = Setting::class;

    /**
     * BaseSettingsForm constructor.
     *
     * @param null $request
     */
    public function __construct($request = null)
    {
        $this->name = trans('dashboard::systems/settings.tabs.settings');
        parent::__construct($request);
    }

    /**
     * Display Settings App.
     *
     * @return View
     */
    public function get() : View
    {
        $settings = $this->model->get([
            'site_title',
            'site_keywords',
            'site_description',
            'site_adress',
            'site_phone',
            'site_email',
        ], []);

        return view('dashboard.systems.settings.container.base', $settings);
    }

    /**
     * Save Base Settings.
     */
    public function persist()
    {
        $settings = $this->request->except('_token');
        foreach ($settings as $key => $value) {
            $this->model->set($key, $value);
        }
    }
}
