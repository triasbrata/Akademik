<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class SiswaPerkembangan extends Model
{

    protected $guarded=['id'];

    public function siswa(){
    	return $this->belongsTo(Siswa::class);
    }
}
