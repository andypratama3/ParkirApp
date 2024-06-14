<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Parkir;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ParkirExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Parkir::where('status', 'active')->get();
    }

    public function map($parkir): array
    {
        return [
            $parkir->user->name,
            $parkir->nik,
            $parkir->plat,
            $parkir->stnk,
            $parkir->warna,
            $parkir->tanggal_lahir,
            $parkir->hp,
            $parkir->alamat,
            $parkir->tipe_roda,
            $parkir->user_id,
            $parkir->created_at,
            $parkir->updated_at,
        ];
    }

    public function headings(): array
    {
        return [
            'name',
            'nik',
            'plat',
            'stnk',
            'warna',
            'tanggal lahir',
            'hp',
            'alamat',
            'tipe_roda',
            'user_id',
            'created_at',
            'updated_at',
        ];
    }
}

