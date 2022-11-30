<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Lead extends Model
{
    use HasFactory,Loggable;
    
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'country',
        'city',
        'phone2',
        'date_of_birth',
        'deposit',
        'sales',
        'campaign',
        'status',
        'source_campain',
    ];    
}
