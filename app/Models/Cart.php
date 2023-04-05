<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'Address',
        'Title',
        'Description',
        'Price',
        'Image',
        'Product_id',
        'User_id'



    ];
}
