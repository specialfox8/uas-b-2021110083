<?php

namespace App\Models;

use App\Http\Controllers\Orders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
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
