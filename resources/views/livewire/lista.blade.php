 <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Versão</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ferramentas as $ferramenta)
                    <tr>
                        <td>{{ $ferramenta->nome }}</td>
                        <td>{{ $ferramenta->versao }}</td>
                        <td>{{ $ferramenta->status }}</td>
                        <td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>