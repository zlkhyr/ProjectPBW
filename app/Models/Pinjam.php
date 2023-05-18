<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
     protected $fillable = [
        'id_peminjam',
        'nama_peminjam',
        'jumlahpinjam',
        'lamapinjam',
        'deadline',
        'id_barang',
        'nama_barang',
        'foto_barang',
        'id_pemilik'
    ];

    public function barang()
    {
        return $this-> belongsTo(Barang::class);
    }
}
