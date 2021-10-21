<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beli extends Model{
    protected $table = 'beli';
    protected $primaryKey = 'id_beli';
    protected $guarded = [];
    protected $fillable = ['id_beli','nama_barang','name','jumlah','email','tlp','status','created_at','updated_at'];
}