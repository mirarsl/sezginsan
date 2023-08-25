<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
    use \TCG\Voyager\Traits\Translatable;
    protected $translatable = ['title', 'text','button','link'];
}
