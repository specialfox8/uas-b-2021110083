<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = ['full_name', 'email', 'phone_number'];

    public function item()
    {
        return $this->belongsTo(Items::class);
    }
}
