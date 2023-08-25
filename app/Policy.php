<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Policy extends Model
{
    use \TCG\Voyager\Traits\Translatable;
    protected $translatable = ['title', 'text','slug'];
}
