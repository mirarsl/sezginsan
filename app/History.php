<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class History extends Model
{
    use \TCG\Voyager\Traits\Translatable;
    protected $translatable = ['title', 'text'];
}
