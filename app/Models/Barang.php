<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
     protected $fillable = [
        'barang',
        'harga',
        'stock',
        'user_id',
        'Foto',
    ];

    public function user()
    {
        return $this-> belongsTo(User::class);
    }
}
