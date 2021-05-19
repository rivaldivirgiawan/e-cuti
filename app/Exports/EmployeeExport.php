<?php

namespace App\Exports;

use App\Models\Employee;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class EmployeeExport implements FromCollection, WithHeadings, WithMapping
{
    protected $i = 1;

    public function map($model): array
    {
        return[
            $this->i++,
            $model->nip,
            $model->fullname,
            $model->gender,
            $model->birthplace.', '.$model->birthdate,
            $model->address,
            $model->phone_number,
            $model->work_unit->name,
            $model->position->position_name,
            $model->entrydate,
            $model->status_label,
        ];
    }

    public function headings(): array
    {
        return[
            'NO',
            'NIP',
            'Nama',
            'Jenis Kelamin',
            'Tempat, Tgl Lahir',
            'Alamat',
            'No Telp',
            'Unit Kerja',
            'Jabatan',
            'Tgl Masuk',
            'Status'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Employee::all();
    }

}

