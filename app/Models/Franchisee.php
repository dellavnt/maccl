<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchisee extends Model
{
    public function Franchisee()
    {
        return $this->belongsTo(paket::class);
    }
}
