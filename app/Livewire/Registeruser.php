<?php

namespace App\Livewire;

use App\Livewire\Forms\RegisterForm;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Registeruser extends Component
{
    public RegisterForm $form;

    public function render()
    {
        return view('livewire.registeruser');
    }

    public function save()
    {
        $this->form->validate();

        dd(123);
    }
}
