<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AR extends Model
{
    use HasFactory;

    protected $fillable = [
        'uniqueid',
        'ytlink1',
        'ytlink2',
        'ytlink3',
        'ytlink4',
        'ytlink5',
        'ytlink6',
        'ytlink7',
        'ytlink8',
        'ytlink9',
        'ytlink10',
    ];
}
