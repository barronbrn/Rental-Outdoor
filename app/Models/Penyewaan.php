<?php

namespace App\Models;

use App\Models\Peralatan;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    //
    protected $fillable = [
        'user_id', // Tambahkan ini
        'peralatan_id',
        'durasi',
        'total_harga',
        'metode_pembayaran',
        'status',
    ];

    public function peralatan()
    {
        return $this->belongsTo(Peralatan::class, 'peralatan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
