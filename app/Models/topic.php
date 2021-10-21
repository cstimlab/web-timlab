<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topic extends Model{
    protected $table = 'topic';
    protected $primaryKey = 'id_topic';
    protected $guarded = [];
    protected $fillable = ['id_topic','topic'];
}