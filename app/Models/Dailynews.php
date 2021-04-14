<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailynews extends Model
{
    use HasFactory;

      protected $fillable = ['title','Content','rating','datetime'];


    public function agencie()
    {
        return $this->belongsTo(Agency::class);
    }

    public function getRatingAttribute($value)
    {
            return $value.'/10';
    }
}
