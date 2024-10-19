<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $price
 * @property $image
 * @property $created_at
 * @property $updated_at
 *
 * @property ProductUser[] $productUsers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    use HasFactory, Notifiable;

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'price', 'image'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productUsers()
    {
       return $this->hasMany(\App\Models\User::class, 'id', 'product_id');
    }
    

}
