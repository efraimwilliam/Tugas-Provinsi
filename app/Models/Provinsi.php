<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    
    public $fillable = ['nama'];

    protected $table = 'provinsi';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;

    //one to many kabupaten
    public function kabupaten(){
        return $this->hasMany(Kabupaten::class, 'id_provinsi');
    }
}
