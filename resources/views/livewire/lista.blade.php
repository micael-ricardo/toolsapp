    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#ferramentaModal" wire:click="resetInputFields">
        Cadastrar Ferramenta
    </button>

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
                        <button wire:click="edit({{ $ferramenta->id }})" class="btn btn-primary btn-sm">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button wire:click="delete({{ $ferramenta->id }})" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>