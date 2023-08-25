<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Corporate extends Model
{
    use Translatable;
    protected $translatable = ['about', 'about_short','mission','vision','values','history','title','video'];
}
