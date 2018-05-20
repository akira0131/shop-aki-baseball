<?php

namespace App\Http\Controllers;

class TopController extends Controller
{
    /**
     * @return
     */
    public function index()
    {
        return view('shop.index', [
            'widgets' => config('platform.main_widgets', []),
        ]);
    }
}
