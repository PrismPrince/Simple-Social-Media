<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
  protected $primaryKey = 'user_id';

  public function User()
  {
      return $this->belongsTo(User::class);
  }
}
