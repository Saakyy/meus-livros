<img src="{{ asset('img/guaxinim.png') }}" alt="Logo Guaxinim" style="width: 100px; height: auto;">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<h1>Meus Livros</h1>
<a href="{{ route('livros.create') }}" class="btn-adicionar" style="margin-bottom: 30px;">➕ Adicionar Livro</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Nome</th>
        <th>Autor</th>
        <th>Páginas</th>
        <th>Volumes</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>

    @foreach ($livros as $livro)
    <tr>
        <td>{{ $livro->nome }}</td>
        <td>{{ $livro->autor }}</td>
        <td>{{ $livro->paginas }}</td>
        <td>{{ $livro->volumes }}</td>
        <td>{{ $livro->lido ? '✔ Lido' : '📖 Lendo' }}</td>
        <td>
            <a href="{{ route('livros.edit', $livro) }}">✒️ Editar</a> |
            <form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Tem certeza?')">❌ Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>