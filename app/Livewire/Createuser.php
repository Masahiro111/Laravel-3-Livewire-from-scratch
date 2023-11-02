<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Createuser extends Component
{
    public $name = "Awesome Name";

    // public function mount()
    // {
    //     $this->users = User::all();
    // }

    public function render()
    {
        return view('livewire.createuser', [
            'email' => 'test@gamil.com',
            'users' => User::all(),
        ]);
    }
}
