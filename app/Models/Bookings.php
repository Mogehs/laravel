<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import the User model
use App\Models\Service; // Import the Service model

class Bookings extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'bookings';

    // Define the primary key
    protected $primaryKey = 'booking_id';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'user_id',
        'service_id',
        'service_date',
        'status',
        'name',
        'address',
        'requirements',
        'service_preffer_date',
        'service_time'
    ];

    /**
     * Define a relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Define a relationship with the Service model.
     */
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'service_id');
    }
}
