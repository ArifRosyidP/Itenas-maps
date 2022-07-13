<?php

namespace App\Models;

use App\Models\Jaringan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gedung extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jaringan()
    {
        return $this->belongsTo(Jaringan::class);
    }
}
