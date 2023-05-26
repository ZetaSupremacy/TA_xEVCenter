<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group_member extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id'
    ];    

    public function reservation_group() {
        return $this->belongsTo(reservation_group::class);
    }

    public function pengunjung() {
        return $this->belongsTo(pengunjung::class);
    }

}
