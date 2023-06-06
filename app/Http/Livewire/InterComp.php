<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class InterComp extends Component
{
    public $users;
    public function mount(){
        $this->users = User::all();
    }
    public function render()
    {
        return view('livewire.inter-comp');
    }
}