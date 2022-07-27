<?php

namespace App\Models;

use App\Models\Gedung;
use App\Models\lantai;
use App\Models\status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class detailssid extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function scopeFilter($query, array $filters)
    // {
    //     $query->when($filters['search'] ?? false, function ($query, $search) {
    //         return $query->where('nama_ssid', 'like', '%' . $search . '%')
    //             ->orWhereHas('gedung', function ($query) use ($search) {
    //                 $query->where('name', 'like', '%' . $search . '%');
    //             })
    //             ->orWhereHas('status', function ($query) use ($search) {
    //                 $query->where('nama_status', 'like', '%' . $search . '%');
    //             })
    //             ->orWhereHas('lantai', function ($query) use ($search) {
    //                 $query->where('keterangan', 'like', '%' . $search . '%');
    //             });

    //         // $query->when($filters['gedung'] ?? false, function($query, $gedung) {
    //         //     return $query->whereHas('gedung', function($query) use($gedung) {
    //         //         $query->where('name', $gedung);

    //         //     });
    //         // });
    //     });
    // }

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