<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'promos';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'cover_image',
        'price',
        'discount',
        'description',
    ];

    /**
     * Accessor to calculate discounted price.
     *
     * @return float
     */
    public function getDiscountedPriceAttribute()
    {
        return $this->price * ((100 - $this->discount) / 100);
    }

    /**
     * Scope for filtering promos with active discounts.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithDiscount($query)
    {
        return $query->where('discount', '>', 0);
    }
}
