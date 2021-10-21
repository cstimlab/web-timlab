<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan extends Model{
    protected $table = 'layanan';
    protected $primaryKey = 'id_layanan';
    protected $guarded = [];
    protected $fillable = ['id_layanan','layanan','deskripsi_layanan'];
}