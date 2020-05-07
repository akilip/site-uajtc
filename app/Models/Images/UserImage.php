<?php

namespace App\Models\Images;

use Illuminate\Database\Eloquent\Model;

class UserImage extends Model
{
    public $timestamps=false;
    public function user()
    {
        return  $this->belongsTo('App\User');
    }
}
