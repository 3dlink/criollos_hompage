<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * Get the works for the category.
     */
    public function works()
    {
        return $this->hasMany('App\Work');
    }
}
