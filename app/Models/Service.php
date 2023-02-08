<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'service_category',
        'service_image',
        'first_title',
        'first_description',
        'second_title',
        'second_description'
        
    ];
}
