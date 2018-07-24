<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    protected $table = 'count';	
	public $timestamps = false;
	protected $fillable = [
		'countDiv', 'countSat', 'countDir', 'countUnt',
	];

}
