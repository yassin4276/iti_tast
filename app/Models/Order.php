<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps=false;
    function product(){
        return $this->belongsTo(Product::class);
    }
}
