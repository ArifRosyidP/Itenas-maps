<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konserver extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('tipe', 'like', '%' . $search . '%')
                ->orWhere('cpu', 'like', '%' . $search . '%')
                ->orWhere('memori', 'like', '%' . $search . '%')
                ->orWhere('qty', 'like', '%' . $search . '%')
                ->orWhere('kondisi', 'like', '%' . $search . '%')
                ->orWhere('tahun', 'like', '%' . $search . '%');
            // ->orWhereHas('gedung', function ($query) use ($search) {
            // ->orWhereHas('gedung', function ($query) use ($search) {
            //     $query->where('name', 'like', '%' . $search . '%');
            // })
            // ->orWhereHas('status', function ($query) use ($search) {
            //     $query->where('nama_status', 'like', '%' . $search . '%');
            // })
            // ->orWhereHas('lantai', function ($query) use ($search) {
            //     $query->where('keterangan', 'like', '%' . $search . '%');
            // });

            // $query->when($filters['gedung'] ?? false, function($query, $gedung) {
            //     return $query->whereHas('gedung', function($query) use($gedung) {
            //         $query->where('name', $gedung);

            //     });
            // });
        });
    }
}