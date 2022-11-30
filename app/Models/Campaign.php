<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lead;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
class Campaign extends Model
{
    use HasFactory,Loggable;
    function Leads()
    {
        return $this->hasMany(Lead::class,'campaign');
    }
}
