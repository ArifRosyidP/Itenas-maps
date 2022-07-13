<?php

namespace App\Models;

use App\Models\Gedung;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aset extends Model
{
    use HasFactory;

    protected $guarded = ['id','nama'];
    
    public function gedung()
    {
        
        return $this->belongsTo(Gedung::class);
    }
}
