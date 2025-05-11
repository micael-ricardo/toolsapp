<div class="container mt-4">
<button class="btn btn-success mb-3" wire:click="$emit('abrirModalCriar')" title="Cadastrar Ferramenta"><i class="bi bi-plus-lg"></i></button>
 <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Versão</th>
                    <th>Status</th>
                    <th>Path</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ferramentas as $ferramenta)
                    <tr>
                        <td>{{ $ferramenta->nome }}</td>
                        <td>{{ $ferramenta->versao }}</td>
                        <td>{{ $ferramenta->status }}</td>
                        <td>{{ $ferramenta->path  }}</td>
                        <td>
                         <button class="btn btn-primary btn-sm" wire:click="$emit('abrirModalEditar', {{ $ferramenta->id }})"> <i class="bi bi-pencil-square"></i></button>
                        <button wire:click="delete({{ $ferramenta->id }})" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @livewire('dados', ['ferramenta' => $ferramentaSelecionada], key(optional($ferramentaSelecionada)->id ?? 'nova'))
</div>

<script>
    window.addEventListener('abrirModal', () => {
        const modal = new bootstrap.Modal(document.getElementById('ferramentaModal'));
        modal.show();
    });
</script>

        