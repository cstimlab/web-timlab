<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solusi extends Model{
    protected $table = 'solusi';
    protected $primaryKey = 'id_solusi';
    protected $guarded = [];
    protected $fillable = ['id_solusi','solusi','foto_solusi','updated_at','created_at'];
}