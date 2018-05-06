<?php

namespace App\Models;

use App\Facades\Dashboard;
use App\Exceptions\TypeException;

class Page extends Post
{
    /**
     * @var string
     */
    protected $postType = 'page';

    /**
     * @param $slug
     *
     * @return $this
     * @throws TypeException
     */
    public function getBehavior($slug)
    {
        $this->behavior = Dashboard::getStorage('pages')->find($slug);

        if (is_null($this->behavior)) {
            throw new TypeException("{$slug} Type is not found");
        }

        return $this;
    }
}
