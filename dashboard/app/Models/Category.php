<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    use HasFactory;
    protected $fillable = [ 'category_name', 'category_image', 'sort_order', 'status' ];


    public function product() {
        return $this->hasOne(Product::class, 'category_id');
    }
}
