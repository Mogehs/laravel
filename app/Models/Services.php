<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $table = "services";
    protected $primaryKey = "service_id";
    protected $fillable = ['service_name', 'service_description', 'price','service_img1','service_img2','service_img3','service_sub1',
        'service_sub2',
        'service_sub3',];
}
