<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $table = 'baskets';

    protected $primaryKey = 'basketID';

    public $timestamps = false;

    protected $fillable = ['userID', 'productID', 'total'];

    // protected $fillable = ['user_id', 'products', 'completed'];

    // protected $casts = ['products' => 'array'];

    use HasFactory;

}