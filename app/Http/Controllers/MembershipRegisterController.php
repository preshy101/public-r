<?php

namespace App\Http\Controllers;

use App\Models\MembershipRegister;
use Illuminate\Http\Request;

class MembershipRegisterController extends Controller
{
    public function index(){
        return view('livewire.member.member-registry');
    }
    public function uploadView(){
        return view('livewire.member.upload-membership-register');
    }
    public function searchMembership(Request $request){
        $search = $request->validate([
            'search' => 'required'
        ]);

        $result = MembershipRegister::where('LAST_NAME', $request->search)->first();
        if ($result == null) {
            $result = MembershipRegister::where('FIRST_NAME', $request->search)->first();
        }
        if ($result == null) {
            $result = MembershipRegister::where('PRACTICE_ID', $request->search)->first();
        }
        if ($result == null) {
            $result = MembershipRegister::where('PHONE', $request->search)->first();
        }
        if ($result == null) {
            $result = MembershipRegister::where('EMAIL', $request->search)->first();
        }
        session()->flash('result', $result);
        return redirect()->back();
    }
    public function confirm(string $id)  { 
        MembershipRegister::findOrFail($id)->update(['Confirmed' => 'Yes']);
        session()->flash('success', 'Membership Record Confirmed successfully');
        return redirect()->back();
    }
}

