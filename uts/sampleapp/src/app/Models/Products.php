<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'stock',
        'description',
    ];

    // Relasi dengan Order
    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
}
