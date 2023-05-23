<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengunjung extends Model
{
    use HasFactory;
    protected $fillable = ['list-visitor-name[]','gender','age','job-title[]','institusi[]'];
    protected $table = 'pengunjung';
}
