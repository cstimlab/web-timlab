<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model{
    protected $table = 'order';
    protected $primaryKey = 'id_order';
    protected $guarded = [];
    protected $fillable = ['id_order','name','email','tlp','barang_order','created_at','updated_at','jumlah','status'];
}