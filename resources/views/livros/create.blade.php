@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>{{ isset($title) ? $title : 'Livraria Leia Bem' }}</h4>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{ route('livros.index') }}" class="btn btn-outline-dark">Voltar</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <form action="{{ route('livros.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="genero" class="form-label">Genero literário</label>
                                    <select class="form-select form-select-lg mb-3 form-control" name="genero" required>
                                        <option selected>Selecione...</option>
                                        <option value="Dramático">Dramático</option>
                                        <option value="Lírico">Lírico</option>
                                        <option value="Narrativo">Narrativo</option>
                                      </select>
                                </div>
                                <div class="mb-3">
                                    <label for="titulo" class="form-label">Titulo</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lancamento" class="form-label">Data de lançamento</label>
                                    <input type="text" class="form-control" id="lancamento" name="lancamento" maxlength="4" required>
                                </div>
                                <div class="mb-3">
                                    <label for="autor_id" class="form-label">Autor</label>
                                    <select class="form-select form-select-lg mb-3 form-control" name="autor_id" required>
                                        <option selected>Selecione...</option>
                                        @foreach ($autores as $autor )
                                            <option value="{{ $autor->id }}">{{ $autor->nome }}</option>
                                        @endforeach
                                      </select>
                                </div>
                                <div class="mb-3">
                                    <label for="editora_id" class="form-label">Editora</label>
                                    <select class="form-select form-select-lg mb-3 form-control" name="editora_id" required>
                                        <option selected>Selecione...</option>
                                        @foreach ($editoras as $editora )
                                            <option value="{{ $editora->id }}">{{ $editora->nome }}</option>
                                        @endforeach
                                      </select>
                                </div>
                                <button type="submit" class="btn btn-success">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
