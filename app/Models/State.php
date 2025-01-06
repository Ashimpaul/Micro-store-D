<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    // Define the table name (if different from the pluralized form)
    protected $table = 'states';

    // Specify the fillable attributes
    protected $fillable = ['name', 'iso', 'vehicle_code', 'districts'];
}
