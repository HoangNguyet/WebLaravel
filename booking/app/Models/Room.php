<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $fillable = [ 'roomNumber','roomType', 'availability'];
    use HasFactory;
}
