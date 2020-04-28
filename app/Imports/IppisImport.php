<?php

namespace App\Imports;

use App\Models\Ippis;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Illuminate\Support\Facades\Storage;

class IppisImport implements ToModel, WithHeadingRow
{


    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {

        Ippis::create([
            'user_id' => auth()->user()->id,
            "ministry_name" => $row['ministry_name'],
            "employee_name" => $row['employee_name'],
            "employee_number" => $row['employee_number'],
            "mobile_phone" => $row['mobile_phone'],
            "email" => $row['email'],
            "netpay" => $row['netpay'],
        ]);

        

    }


    public function batchSize(): int
    {
        return 500;
    }

}