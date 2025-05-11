<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ferramenta;
use Livewire\WithPagination;

class Lista extends Component
{
    use WithPagination;
    public $ferramentaSelecionada = null;
    public $perPage = 10;

    protected $listeners = ['abrirModalCriar' => 'criar', 'abrirModalEditar' => 'editar'];
    protected $paginationTheme = 'bootstrap';

    
        public function render()
    {
           return view('livewire.lista', [
            'ferramentas' => Ferramenta::orderBy('nome') 
                ->paginate($this->perPage) 
        ]);
    }
    
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

}

