<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function gambarproduk()
    {
        return $this->hasMany(GambarProduct::class);
    }

    public function kategory()
    {
        return $this->belongsTo(Kategory::class);
    }
}
