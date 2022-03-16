<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $table = 'admin';
    protected $fillable = ['partnumber', 'name', 'UM',];
}
