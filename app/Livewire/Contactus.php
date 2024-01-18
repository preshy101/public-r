<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\feedback;
use App\Livewire\Contactus;
use Livewire\Attributes\Rule;
// use Illuminate\Support\Facades\Validator;
class Contactus extends Component
{
    #[Rule('required|min:3|max:255')]
    public $name;

    #[Rule('required|email|min:3|max:255')]
    public $email;

    #[Rule('required|min:3|max:255')]
    public $message;

    public $phone;
    public $website;

    public function create(){
        // $validated = $this->validateOnly('name','email', 'message');
        // $validatedData = Validator::make(
        //     ['name' => $this->name],
        //     ['email' => $this->email],
        //     ['message' => $this->message],
        //     ['email' => 'required|email|min:3|max:255'],
        //     ['name' => 'required||min:3|max:255'],
        //     ['message' => 'required||min:3|max:255'],
        //     ['required' => 'The :attribute field is required'],
        // )->validate();
        $validatedData = $this->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|min:3|max:255',
            'message' => 'required',
            'phone' => 'required',
            'website' => 'required', 
        ]);
 
        feedback::create(
            // [
            //     'name' => $this->name,
            //     'email' => $this->email,
            //     'phone' => $this->phone,
            //     'website' => $this->website,
            //     'message' => $this->message,
            //     'status' => false
            //     ]
            $validatedData
        );
        $this->reset('name', 'email', 'phone', 'website', 'message');
        session()->flash('success',' Message sent successfully!');
        // dd($this->name);
    }
    public function render()
    {
        return view('livewire.contactus')
        ->extends('welcome');
    }
}
