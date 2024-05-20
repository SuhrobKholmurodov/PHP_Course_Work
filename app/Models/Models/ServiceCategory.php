<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
   protected $table = 'servicecategorys';
   protected $fillable = ['service_name', 'service_description', '   ','status'];
}
