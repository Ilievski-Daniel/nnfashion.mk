<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'price'
    ];
    public function sizes(){
        return $this->belongsToMany(Size::class);
    }
    public function colors(){
        return $this->belongsToMany(Color::class, 'product_color');
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function orders(){
        return $this->belongsToMany(Order::class, 'foreign_key');
    }
}
