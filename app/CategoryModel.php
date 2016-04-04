<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryModel extends Model
{
	use SoftDeletes;
    protected $table = 'category';
    protected $dates = ['deleted_at'];
	protected $fillable = ['name','active'];

}
