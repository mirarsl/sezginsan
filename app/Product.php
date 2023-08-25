<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use \TCG\Voyager\Traits\Translatable;
    protected $translatable = ['title', 'text','slug','meta_title','meta_desc','meta_tags'];
}
