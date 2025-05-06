<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class products extends Model
{
    protected $primaryKey = 'product_no'; //primary key ekata eyala dena eka arenna wena ekak denawa nm methana denna oni
    public $incrementing = false;

    protected $keyType = 'string';
    use HasFactory;

    protected $fillable = [
        'product_no',
        'productName',
        'unit_price',
        'product_image',
        'status',
        'category_id',
        
        
    ];
    public function category(){
        return $this->belongsTo(category::class);
    }
}
