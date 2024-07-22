<?php

namespace App\Imports;

use App\Models\ResultSheet as ModelsResultSheet; 
use Maatwebsite\Excel\Concerns\ToModel;

class ResultSheet implements ToModel
{

    public function model(array $row)
    {
        // Define how to create a model from the Excel row data
        return new ModelsResultSheet([
            'registrationNumber' => $row[0],
            'tu' => $row[1],
            'tp' => $row[2],
            'cgpa' => $row[3],
            'remarks' => $row[4],
            'type' => $row[5],
            'month' => $row[6],
            'year' => $row[7]
            // Add more columns as needed
        ]);

    }

}
