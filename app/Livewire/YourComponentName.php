<?php

namespace App\Livewire;

use Livewire\Component;

class YourComponentName extends Component
{




    public $message = 'Hello, Livewire!';

    public function render()
    {
        return view('livewire.your-component-name');
    }
    // public function render()
    // {
    //     return view('livewire.your-component-name');
    // }
    public function changemessage()
    {
        $this->message ="Hello Deependra welcome to the world !";
    }
}
