<?php

namespace App\Listeners\Category;

use App\Http\Forms\Category\CategoryDescForm;

class CategoryDescLister
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
        return CategoryDescForm::class;
    }
}
