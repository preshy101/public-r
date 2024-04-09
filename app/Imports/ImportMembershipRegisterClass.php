<?php

namespace App\Imports;

use App\Models\MembershipRegister;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportMembershipRegisterClass implements ToModel
{

    public function model(array $row)
    {

        // Define how to create a model from the Excel row data
        return new MembershipRegister([
            'sno' => $row[0],
            'last_name' => $row[1],
            'first_name' => $row[2],
            'phone' => $row[3],
            'email' => $row[4],
            'grade' => $row[5],
            'practice_id' => $row[6],
            'chapter' => $row[7],
            'inducted' => $row[8],
            'upgraded' => $row[9],
            'organization' => $row[10],
            // Add more columns as needed
        ]);

    }
}
