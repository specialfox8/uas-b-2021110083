<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'harga',
        'stok',
        'created_at',
        'updated_at',
    ];

    // 1 Category dapat memiliki banyak Articles
    public function articles()
    {
        return $this->hasMany(Orders::class);
    }
}
