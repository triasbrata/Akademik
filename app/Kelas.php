<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
	protected $table='kelases';
	protected $guarded = ['id'];
    
    public function rombel(){
    	return $this->hasOne(RombonganBelajar::class);
    }

    public function siswa_pendidikan(){
    	return $this->hasMany(SiswaPendidikan::class);
    }
}
