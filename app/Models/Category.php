<?php

namespace App\Models;

use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name'];

    public function getIncrementing()
    {
    	return false;
    }

    public static function boot()
    {
    	static::creating(function($model){
    		$model->incrementing 	= false;
    		$uuidVersion 			= (!empty($model->uuidVersion) ? $model->uuidVersion : 4);
    		$uuid 					= Uuid::generate($uuidVersion);
    		$model->attributes[$model->getKeyName()] = $uuid->string;
    	}, 0);
    }
}
