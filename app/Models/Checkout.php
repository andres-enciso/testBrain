<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Checkout extends Model
{
    use HasFactory;

    protected $table = 'checkout';
    protected $fillable = ['id_products', 'people', 'price', 'reservation_date'];
    protected $guarded = ['id'];

    public static function getConfirmacion($id)
    {
        return DB::table('checkout as ch')->select('ch.*', 'p.title', 'p.description', 'c.category', 'p.price as price_u')->where('ch.id', $id)->join('products as p', 'p.id', '=', 'ch.id_products')->join('category as c', 'p.id_category', '=', 'c.id')->first();
    }
}
