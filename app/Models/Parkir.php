<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\UsesUuid;
use App\Http\Traits\NameHasSlug;
class Parkir extends Model
{
    use HasFactory;
    use NameHasSlug, UsesUuid;
    protected $table = 'parkirs';

    protected $fillable = [
        'name',
        'nik',
        'plat',
        'stnk',
        'warna',
        'tanggal_lahir',
        'hp',
        'alamat',
        'status',
        'tipe_roda',
        'user_id',
        'slug'
    ];


}
