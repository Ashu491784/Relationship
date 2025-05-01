<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class products extends Model
{
    
    use HasFactory;

    protected $fillable = [
        
        'productName',
        'unit_price',
        'product_image',
        'status'
        
        
    ];
}
