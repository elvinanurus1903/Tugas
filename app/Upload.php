<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
	protected $table = 'uploads';
    protected $fillable = [
     'nim','nama','email', 'image'
    ];


    public function matkul()
    {
    	return $this->belongsToMany(Matkul::class)->withPivot(['nilai']);
    }
}
