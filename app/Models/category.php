<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    // public $keyType = 'string';

    use HasFactory;

    protected $fillable = [
        
        'CategoryName'
        
    ];


}
