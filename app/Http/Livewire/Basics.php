<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Basics extends Component
{

    public $name;
    public $message = '';
    public $isItTrue = false;
    public $age = 35;

    public function render()
    {
        return view('livewire.basics')->layout('layouts.app');
    }

    public function changeName()
    {
        $this->name = 'Dana';
    }

    public function verifyAge()
    {
        if($this->age >= 21){
            $this->message = 'You are old enough to vote in the US & UK';
        } else if($this->age >= 18) {
            $this->message = 'You are old enough to vote in the UK';
        } else {
            $this->message = 'You are not old enough to vote';
        }
    }

}
