<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function trainType()
    {
        return $this->belongsTo(TrainType::class);
    }
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
