<?php

namespace App\Http\Controllers;

use App\Imports\ResultSheet as ImportsResultSheet;
use App\Models\ResultSheet;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ResultSheetController extends Controller
{
    public function resultView(){
        return view('livewire.result.result');
    }
    public function resultUploadView(){
        return view('livewire.result.result-upload');
    }
    public function searchResult(Request $request){
        $request->validate([
            'reg' => 'required|max:255',
            'type' => 'required|max:255',
            'month' => 'nullable|max:255',
            'year' => 'nullable|max:255'
        ]);

        if ($request->type == 'all') {
            $result = ResultSheet::where('registrationNumber',$request->reg)->get();
        }else{
            $result = ResultSheet::where([['registrationNumber',$request->reg],['month', $request->month],['type', $request->type],['year', $request->year]])->get();
        }

        if ($result) {
            session()->flash('result', $result);
        }else{
            session()->flash('error', "No Record found!");
        }
        return redirect()->back();
    }

    public function importResult(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        if($request->password == 'precious@08109062142'){

        // Get the uploaded file
        $file = $request->file('file');

        // Process the Excel file
        Excel::import(new ImportsResultSheet, $file);
        session()->flash('success', 'Excel file imported successfully!');
        return redirect()->back();
    }
        session()->flash('error', 'Incorrect password or wrong file format, Please try again :(');
        return redirect()->back();

}
}
