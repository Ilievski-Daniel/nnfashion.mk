<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'product_id',
        'firstName',
        'lastName',
        'country',
        'adress',
        'color',
        'size',
        'city',
        'postalCode',
        'email',
        'number',
        'complaint',
    ];
    use HasFactory;

    public function products(){
        return $this->hasMany(Product::class, 'product_id');
    }
}
