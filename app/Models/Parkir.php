<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\UsesUuid;
use App\Http\Traits\NameHasSlug;
class Parkir extends Model
{
    use HasFactory, UsesUuid, NameHasSlug;

    protected $table = 'parkirs';

    protected $fillable = [
        'name',
        'ktp',
        'plat',
        'stnk',
        'warna',
        'tanggal_lahir',
        'hp',
        'alamat',
        'status',
        'tipe_roda',
        'foto_pembayaran',
        'lokasi',
        'tanggal_transfer',
        'jumlah_transfer',
        'user_id',
        'slug',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

