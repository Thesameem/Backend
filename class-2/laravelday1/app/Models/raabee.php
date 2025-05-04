<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class raabee extends Model
{
    protected $fillable=['title','description','category','price','rating','stock','brand','weight'];
}
