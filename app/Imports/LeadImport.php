<?php

namespace App\Imports;

use App\Models\Lead;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LeadImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Lead([
            'name'              => $row[0] ,
            'phone'             => $row[1] ,
            'email'             => $row[2] ,
            'address'           => $row[3] ,
            'country'           => $row[4] ,
            'city'              => $row[5] ,
            'phone2'            => $row[6] ,
            'deposit'           => $row[8],
            'date_of_birth'     => $row[7],
            'sales'             => null ,
            'campaign'          => 1 ,
            'status'            => 'new',
            'source_campain'    => 'old',
        ]);
    }
}
