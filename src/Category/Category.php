<?php

namespace IndieHD\Velkart\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];
}
