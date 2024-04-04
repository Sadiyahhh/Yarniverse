<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['userID', 'productID'];

    use HasFactory;

}