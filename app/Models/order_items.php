<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_items extends Model
{
    use HasFactory;


    public function order()
    {
        return $this->belongsTo(Orders::class);
    }

    public function item()
    {
        return $this->belongsTo(Items::class);
    }
}
