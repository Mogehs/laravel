<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProviderProfile extends Model
{
    use HasFactory;
    protected $fillable = ['application_id', 'profile_picture', 'bio', 'phone', 'address'];

    public function application()
    {
        return $this->belongsTo(ServiceProviderApplication::class, 'application_id');
    }
}
