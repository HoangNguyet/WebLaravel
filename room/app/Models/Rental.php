<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    public function getPrice()
    {
        $room = Room::where('id', $this->roomId)->first();
        return $room->price;
    }
}
