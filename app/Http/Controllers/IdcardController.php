<?php

namespace App\Http\Controllers;

use App\Models\Idcard;
use Illuminate\Http\Request;

class IdcardController extends Controller
{
    public function verifyId(string $id){
        $data = Idcard::where('idNumber', $id)->first();
        return view('Livewire.Resources.verifyStaffId', compact('data'));
    }
}
