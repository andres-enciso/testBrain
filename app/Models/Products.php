<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['id_categoria', 'title', 'description', 'qualification', 'price'];
    protected $guarded = ['id'];
}
