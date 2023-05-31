<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propertie extends Model
{
    public $timestamps = false;
    protected $fillable = ['textProperties', 'price', 'details', 'urlimage', 'viewProperties'];
}
