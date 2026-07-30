<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_image',
        'main_image',
        'heading',
        'description',
        'products_count',
        'customers_count',
        'success_percentage',
        'action_text',
        'action_button_text',
        'action_button_link',
    ];
}
