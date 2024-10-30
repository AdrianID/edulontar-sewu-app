<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'package_id',
        'booking_date',
        'ticket_quantity',
        'ticket_number',
        'status'
    ];

    public function package()
    {
        return $this->belongsTo(Packages::class);
    }
}
