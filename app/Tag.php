<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
      public function publications()
    {
        return $this->belongsToMany('App\Publication');
    }
}
