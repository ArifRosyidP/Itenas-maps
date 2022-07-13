<?php

namespace App\Models;

use App\Models\Gedung;
use App\Models\Lantai;
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class detailssid extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function gedung()
    { 
        return $this->belongsTo(Gedung::class);
    }

    public function lantai()
    { 
        return $this->belongsTo(Lantai::class);
    }

    public function status()
    { 
        return $this->belongsTo(Status::class);
    }
}
