<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'id_prod';
    protected $guarded = [];
    //use HasFactory;
    protected $table="productos";
    public $timestamps = false;
}
