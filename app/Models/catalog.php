<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalog extends Model{
    protected $table = 'catalog';
    protected $primaryKey = 'id_barang';
    protected $guarded = [];
    protected $fillable = ['id_barang','name','foto_barang','nama_barang','stok','manual','updated_at','created_at'];
}