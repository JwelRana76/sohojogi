<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestCompo extends Component
{

    public $counter = 0;
    
    public function increment() {
        $this->counter++;
    }

    public function decrement() {
        $this->counter--;
    }
    

    public function render()
    {
        return view('livewire.test-compo');
    }
}
