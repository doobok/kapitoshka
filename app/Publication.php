<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public function tags()
  {
      return $this->belongsToMany('App\Tag');
  }
}
