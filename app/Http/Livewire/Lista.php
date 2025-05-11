<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ferramenta;

class Lista extends Component
{
    public $search = '';
    
    public function render()
    {
        
           $ferramentas = Ferramenta::get();

            return view('livewire.lista', ['ferramentas' => $ferramentas]);
    }
}
