<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Property
 *
 * @property $id
 * @property $textProperties
 * @property $price
 * @property $details
 * @property $urlimage
 * @property $viewProperties
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Property extends Model
{
    
    static $rules = [
		'textProperties' => 'required',
		'price' => 'required',
		'details' => 'required',
		'urlimage' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['textProperties','price','details','urlimage','viewProperties'];



}
