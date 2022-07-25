<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listserver extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('vmid', 'like', '%' . $search . '%')
                ->orWhere('nama', 'like', '%' . $search . '%')
                ->orWhere('fungsi', 'like', '%' . $search . '%')
                ->orWhere('ip', 'like', '%' . $search . '%')
                ->orWhere('ram', 'like', '%' . $search . '%')
                ->orWhere('vcpu', 'like', '%' . $search . '%')
                ->orWhere('hdd', 'like', '%' . $search . '%');
        });
    }
}