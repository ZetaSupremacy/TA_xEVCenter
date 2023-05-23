<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registrasi extends Component
{
    
    public $pengunjung = 1;

    public function render()
    {
        return view('livewire.registrasi'
        );
    }

    public function switchroom()
    {
        $this->pengunjung++;
    }
}
