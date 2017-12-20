<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $table = 'settings';

    protected $fillable = ['option','slug','value'];

    protected $dates = ['created_at', 'updated_at'];

}