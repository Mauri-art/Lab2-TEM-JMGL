<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

/**
 * Class Producto
 *
 * @property $id
 * @property $cod_product
 * @property $nameProd
 * @property $descProd
 * @property $typeProd
 * @property $costUnit
 * @property $cantExist
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Eloquent
{
    
    static $rules = [
		'cod_product' => 'required',
		'nameProd' => 'required',
		'descProd' => 'required',
		'typeProd' => 'required',
		'costUnit' => 'required',
		'cantExist' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_product','nameProd','descProd','typeProd','costUnit','cantExist'];



}
