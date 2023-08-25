<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Page extends Model
{
    use \TCG\Voyager\Traits\Translatable;
    protected $translatable = ['title', 'meta_title','meta_desc','meta_tags','slug'];
}
