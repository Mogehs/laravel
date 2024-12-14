<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProviderApplication extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'location', 'experience',   'service_id', 'reason', 'application_status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Services::class, 'service_id');
    }

    public function profile()
    {
        return $this->hasOne(ServiceProviderProfile::class, 'application_id');
    }

}
