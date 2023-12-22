<?php

namespace App\Models;


use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'harga',
        'stok',
        'created_at',
        'updated_at',
    ];

    // 1 Category dapat memiliki banyak Articles
    public function order()
    {
        return $this->hasMany(Orders::class);
    }
}
