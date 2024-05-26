<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'confirm-password',
        'first-name',
        'last-name',
        'phone',
        'address'
    ];
}
