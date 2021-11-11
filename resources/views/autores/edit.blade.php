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
                            <a href="{{ route('autores.index') }}" class="btn btn-outline-dark">Voltar</a>
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
                            <form action="{{ route('autores.update', ['id' => $item->id]) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Autor</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $item->nome }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nascimento" class="form-label">Data de nascimento</label>
                                    <input type="date" class="form-control" id="nascimento" name="nascimento" value="{{ $item->nascimento }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="sexo" class="form-label">Sexo do autor</label>
                                    <select class="form-select form-select-lg mb-3 form-control" name="sexo" value="{{ $item->sexo }}" required>
                                        <option selected>Selecione...</option>
                                        <option value="Feminino" {{($item->sexo === 'Feminino') ? 'Selected' : ''}}> Feminino</option>
                                        <option value="Masculino" {{($item->sexo === 'Masculino') ? 'Selected' : ''}}> Masculino</option>
                                        <option value="Outro" {{($item->sexo === 'Outro') ? 'Selected' : ''}}> Outro</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nacionalidade" class="form-label">Nacionalidade</label>
                                    <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" value="{{ $item->nacionalidade }}" required>
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
