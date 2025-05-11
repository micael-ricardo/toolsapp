<div class="container mt-4">
    <button class="btn btn-success mb-3" wire:click="$emit('abrirModalCriar')" title="Cadastrar Ferramenta"><i class="bi bi-plus-lg"></i></button>

    <div class="overflow-auto" style="height: 450px;">
        <table class="table table-sm table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="fw-semibold text-nowrap text-center">Nome</th>
                    <th class="fw-semibold text-nowrap text-center">Versão</th>
                    <th class="fw-semibold text-nowrap text-center">Status</th>
                    <th class="fw-semibold text-nowrap text-center">Path</th>
                    <th class="fw-semibold text-nowrap text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ferramentas as $ferramenta)
                <tr>
                    <td>{{ $ferramenta->nome }}</td>
                    <td class="text-center">{{ $ferramenta->versao }}</td>
                    <td class="text-center">
                        <span class="badge rounded-pill {{ $ferramenta->status ? 'bg-success' : 'bg-danger' }}">
                            {{ $ferramenta->status ? 'Ativo' : 'Inativo' }}
                        </span>
                    </td>
                    <td>{{ $ferramenta->path  }}</td>
                    <td class="text-center">
                        <button class="btn btn-primary btn-sm" wire:click="$emit('abrirModalEditar', {{ $ferramenta->id }})"> <i class="bi bi-pencil-square"></i></button>
                        <button wire:click="delete({{ $ferramenta->id }})" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row mt-4 align-items-center">
        <div class="col-md-4">
            <div class="d-flex align-items-center">
                <label for="perPage" class="me-2">Itens por página:</label>
                <select wire:model="perPage" id="perPage" class="form-select form-select-sm w-auto">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
            {{ $ferramentas->links() }}
        </div>
    </div>

    @livewire('dados', ['ferramenta' => $ferramentaSelecionada], key(optional($ferramentaSelecionada)->id ?? 'nova'))
</div>

<script>
    window.addEventListener('abrirModal', () => {
        const modal = new bootstrap.Modal(document.getElementById('ferramentaModal'));
        modal.show();
    });

</script>
