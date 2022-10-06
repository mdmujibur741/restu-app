<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\location;
use App\Models\status;


class table extends Model
{
    use HasFactory;


    public function location()
    {
        return $this->belongsTo(location::class,'location_id');
    }

    public function status()
    {
        return $this->belongsTo(status::class,'status_id');
    }

 
}
