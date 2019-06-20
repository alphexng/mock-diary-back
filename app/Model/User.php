<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function entries()
    {
        return $this->hasMany('App\Model\Entry');
    }
}
