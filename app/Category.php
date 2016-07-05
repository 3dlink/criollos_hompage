<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the clients for the category.
     */
    public function clients()
    {
        return $this->hasMany('App\Client');
    }
}
