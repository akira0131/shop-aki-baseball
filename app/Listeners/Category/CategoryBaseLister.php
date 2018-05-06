<?php

namespace App\Listeners\Category;

use App\Http\Forms\Category\CategoryMainForm;

class CategoryBaseLister
{
    /**
     * Handle the event.
     *
     * @return mixed
     *
     * @internal param CategoryEvent $event
     */
    public function handle() : string
    {
        return CategoryMainForm::class;
    }
}
