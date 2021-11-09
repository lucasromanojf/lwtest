<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $message = '';

    public function showMessage()
    {
        sleep(2);

        throw new \Exception("Error!");
    }

    public function render()
    {
        return view('livewire.test');
    }
}
