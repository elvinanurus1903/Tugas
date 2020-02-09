<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $tabel = 'matkul';
    protected $fiilable = ['kode','name','semester'];

    public function upload()
    {
    	return $this->belongsToMany(Upload::class)->withPivot(['nilai']);
    } 
}
