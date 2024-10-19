<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_user extends Model
{
    use HasFactory;

    protected $table = 'product_user'; // Especifica el nombre de la tabla

    protected $fillable = [
        'product_id',
        'user_id',
    ];

    // Definir relaciones
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
