<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table='member';
    protected $primaryKey ='id_pendonor';
    protected $fillable=['no_member','tlp','nama','dom_ktp','nama_perusahaan','jenis','posisi','domisili_perusahaan','rekening','status'];
}
