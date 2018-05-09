<?php

namespace App\Http\Forms\Settings;

use App\Models\Setting;
use App\Forms\Form;

class InfoForm extends Form
{
    /**
     * @var string
     */
    public $name = 'Information';

    /**
     * Base Model.
     *
     * @var
     */
    protected $model = Setting::class;

    /**
     * InfoForm constructor.
     *
     * @param null $request
     */
    public function __construct($request = null)
    {
        $this->name = trans('dashboard::systems/settings.tabs.information');
        parent::__construct($request);
    }

    /**
     * Display Settings App.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get()
    {
        $settings = collect(config('app'));
        $extendSettings = $this->model->get('base', collect());
        $settings = $settings->merge($extendSettings);

        return view('dashboard.systems.settings.container.info', [
            'settings' => $settings,
        ]);
    }
}
