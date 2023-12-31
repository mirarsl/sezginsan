<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Contact extends Model
{
    use Translatable;
    protected $translatable = ['address', 'address2'];
}
