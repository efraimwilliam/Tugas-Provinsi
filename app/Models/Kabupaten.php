<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;
    public $fillable = ['nama', 'id_provinsi'];

    protected $table = 'kabupaten';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;

    //one to many inverse relationship
    public function provinsi(){
        //return $this->belongsTo(User::class, 'id_user');
        return $this->belongsTo(Provinsi::class, 'id_provinsi');
        }
}