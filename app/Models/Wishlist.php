<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{

    protected $table = 'wishlists';

    protected $primaryKey = 'wishlistID';

    public $timestamps = false;

    protected $fillable = ['userID', 'productID'];

    use HasFactory;
}
