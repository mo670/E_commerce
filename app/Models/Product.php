<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'Tittle',
        'Description',
        'Price',
        'Quantity',
        'Discount_Price',
        'catagory',
        'Product_image',
        'Product_id',
        'user_id'



        

         
    ];
}
