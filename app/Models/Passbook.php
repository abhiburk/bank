<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passbook extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'bank_name',
        'cash'
    ];
}
