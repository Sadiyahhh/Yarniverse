<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $primaryKey = 'projectID';

    protected $fillable = ['userID', 'projectTitle' , 'projectDescription' , 'image' , 'notes'];

    use HasFactory;
}
