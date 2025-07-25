@extends('layouts.app')

@section('content')
    <h1>Editar Livro</h1>

    <form action="{{ route('livros.update', $livro->id) }}" method="POST" class="form-livro">
        @csrf
        @method('PUT')

        <input type="text" name="nome" value="{{ $livro->nome }}" placeholder="Nome do livro" required>
        <input type="text" name="autor" value="{{ $livro->autor }}" placeholder="Autor" required>
        <input type="number" name="paginas" value="{{ $livro->paginas }}" placeholder="Número de páginas" required>
        <input type="number" name="volumes" value="{{ $livro->volumes }}" placeholder="Volumes" required>

        <label class="checkbox-label">
            <input type="checkbox" name="lido" {{ $livro->lido ? 'checked' : '' }}> Já li
        </label>

        <button type="submit" class="btn-criar">💾 Salvar Alterações</button>
    </form>

    <br>
    <a href="{{ route('livros.index') }}">⬅️ Voltar</a>
@endsection