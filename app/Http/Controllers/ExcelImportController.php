<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportMembershipRegisterClass;

class ExcelImportController extends Controller
{
    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        if($request->password == 'precious@08109062142'){

        // Get the uploaded file
        $file = $request->file('file');

        // Process the Excel file
        Excel::import(new ImportMembershipRegisterClass, $file);
        session()->flash('success', 'Excel file imported successfully!');
        return redirect()->back();
    }
        session()->flash('error', 'Incorrect password or wrong file format, Please try again :(');
        return redirect()->back();
    
}
}
