<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class CertificateController extends Controller
{
    public function searchCertificate(Request $request){
        $data =  $request->validate([
            'type' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'chapter' => 'nullable|string|max:255'
        ]);
        $certificate = Certificate::where([['type', $request->type],['year', $request->year]])->first('link', 'description');
        session()->flash('certificate', $certificate);
        return view('livewire.certificate');
    }
}
