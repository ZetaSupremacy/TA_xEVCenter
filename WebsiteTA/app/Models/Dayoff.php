<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dayoff extends Model
{    
    public $timestamps = false;
    use HasFactory;
    // protected $table = 'dayoffs';
    
    protected $guarded = [
        'id'
    ];    
}
