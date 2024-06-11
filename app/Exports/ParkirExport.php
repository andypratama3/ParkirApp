<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Parkir;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ParkirExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Parkir::where('status', 'active')->get();
    }

    public function headings()
    {
        return [
            'id',
            'name',
            'nik',
            'plat',
            'stnk',
            'warna',
            'tanggal_lahir',
            'hp',
            'alamat',
            'tipe_roda',
            'user_id',
            'created_at',
            'updated_at',
        ];
    }
}
