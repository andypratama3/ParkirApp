<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\UsesUuid;
use App\Http\Traits\NameHasSlug;

class KritikSaran extends Model
{
    use HasFactory, NameHasSlug, UsesUuid;

    protected $table = 'kritik_sarans';

    protected $fillable = ['name', 'email', 'subject', 'message'];


}
