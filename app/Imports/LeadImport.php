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
        if (!is_null($row[0])) {
            return new Lead([
                'name'              => $row[0].' '.$row[1] ,
                'phone'             => $row[4] ,
                'email'             => $row[2] ,
                'address'           => null ,
                'country'           => $row[3] ,
                'city'              => null ,
                'phone2'            => null ,
                'deposit'           => null,
                'date_of_birth'     => null,
                'sales'             => null ,
                'campaign'          => (\App\Models\Campaign::where('name',$row[5])->count() != 0)?\App\Models\Campaign::where('name',$row[5])->first()->id : 1 ,
                'status'            => 'new',
                'source_campain'    => 'old',
            ]);
        }
    }
}
