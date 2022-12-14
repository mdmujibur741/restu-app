<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    protected $dates = ['resDate '];
    protected $fillable = ['name','mobile','email','resDate','guests','table_id'];

    public function table()
    {
       return $this->belongsTo(table::class, 'table_id');
    }


}
