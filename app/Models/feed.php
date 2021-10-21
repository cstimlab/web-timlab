<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feed extends Model{
    protected $table = 'feed';
    protected $primaryKey = 'id_komen';
    protected $guarded = [];
    protected $fillable = ['id_komen','nama_depan','nama_belakang','email','tlp','komen','created_at','updated_at'];
}