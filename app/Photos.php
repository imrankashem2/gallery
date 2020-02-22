<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
	public $table= 'photos';
	protected $fillable=['uri', 'public','height','width'];
    //
}
