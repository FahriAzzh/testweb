<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    // Jika ingin mendefinisikan kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'address',
    ];

    // Jika diperlukan, tambahkan relasi, scope, atau metode lain di sini
}
