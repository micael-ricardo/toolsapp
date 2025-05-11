<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ferramenta;

class Lista extends Component
{
    public $ferramentaSelecionada = null;

    protected $listeners = ['abrirModalCriar' => 'criar', 'abrirModalEditar' => 'editar'];

    public function criar()
    {
        $this->ferramentaSelecionada = null;
        $this->dispatchBrowserEvent('abrirModal');
    }

    public function editar($id)
    {
        $this->ferramentaSelecionada = Ferramenta::findOrFail($id);
        $this->dispatchBrowserEvent('abrirModal');
    }

    public function render()
    {
        return view('livewire.lista', [
            'ferramentas' => Ferramenta::all(),
        ]);
    }
}

