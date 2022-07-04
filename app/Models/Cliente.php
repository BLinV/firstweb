<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'id_cli';
    protected $guarded = [];
    use HasFactory;
    protected $table="clientes";
}
