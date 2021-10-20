<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    public $fillable = ['nama', 'id_provinsi', 'id_kabupaten'];

    protected $table = 'kecamatan';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;

    //one to many inverse provinsi
    public function provinsikab(){
        return $this->belongsTo(Provinsi::class, 'id_provinsi');
    }
       
    //one to many inverse provinsi
    public function kabupatenkab(){
        return $this->belongsTo(Kabupaten::class, 'id_kabupaten');
    }
}
