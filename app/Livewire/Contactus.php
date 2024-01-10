<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactUsz;
use App\Livewire\Contactus;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Validator;
class Contactus extends Component
{
    #[Rule('required|min:3|max:255')]
    public $name;

    #[Rule('required|email|min:3|max:255')]
    public $email;

    public $phone;
    public $website;

    #[Rule('required|min:3|max:255')]
    public $message;

    public function create(){
        // $validated = $this->validateOnly('name','email', 'message');
        $validatedData = Validator::make(
            ['email' => $this->email],
            ['name' => $this->name],
            ['message' => $this->message],
            ['email' => 'required|email|min:3|max:255'],
            ['name' => 'required||min:3|max:255'],
            ['message' => 'required||min:3|max:255'],
            ['required' => 'The :attribute field is required'],
        )->validate();
 
        ContactUsz::create(
            [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'website' => $this->website,
                'message' => $this->message,
                'status' => false
                ]
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
