<?php

namespace App\Builders;

use Illuminate\Database\Eloquent\Builder;

class CommentBuilder extends Builder
{
    /**
     * Where clause for only approved comments.
     *
     * @return \App\Builders\CommentBuilder
     */
    public function approved() : self
    {
        return $this->where('approved', 1);
    }
}
