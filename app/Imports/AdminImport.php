<?php

namespace App\Imports;

use App\Part;
use Maatwebsite\Excel\Concerns\ToModel;

class AdminImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Part([
            'partnumber' => $row[1],
            'name' => $row[2],
            'UM' => $row[3]
        ]);
    }
}
