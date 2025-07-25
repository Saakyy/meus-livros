<h1>Adicionar Livro</h1>

<form action="{{ route('livros.store') }}" method="POST">
    @csrf
    Nome: <input type="text" name="nome"><br>
    Autor: <input type="text" name="autor"><br>
    Páginas: <input type="number" name="paginas"><br>
    Volumes: <input type="number" name="volumes"><br>
    Lido? <input type="checkbox" name="lido"><br>
    <button type="submit">Salvar</button>
</form>
<a href="{{ route('livros.index') }}">⬅ Voltar</a>