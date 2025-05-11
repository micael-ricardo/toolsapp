<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ferramenta;

class Dados extends Component
{
    public $ferramenta;
    public $nome, $versao, $status = 'Ativa', $path;

    protected $rules = [
        'nome' => 'required|string|max:100',
        'versao' => 'required|string|max:20',
        'status' => 'required|in:Ativa,Inativa',
        'path' => 'required|string|max:255',
    ];

    public function mount($ferramenta = null)
    {
        if ($ferramenta) {
            $this->ferramenta = $ferramenta;
            $this->nome = $ferramenta->nome;
            $this->versao = $ferramenta->versao;
            $this->status = $ferramenta->status;
            $this->path = $ferramenta->path;
        }
    }

        public function render()
    {
        return view('livewire.dados');
    }

    public function salvar()
    {
        $dados = $this->validate();

        if ($this->ferramenta) {
            $this->ferramenta->update($dados);
        } else {
            Ferramenta::create($dados);
        }

        $this->dispatchBrowserEvent('closeModal');
        $this->emitUp('render'); 
    }

}
