<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipRegisterController extends Controller
{
    public function index(){
        return view('livewire.member.member-registry')
        ->extends('welcome');
    }
}

