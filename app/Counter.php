<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Counter extends Model
{
    use \TCG\Voyager\Traits\Translatable;
    protected $translatable = ['title1', 'title2','title3','title4'];
}
