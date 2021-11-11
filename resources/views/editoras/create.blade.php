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
                            <a href="{{ route('editoras.index') }}" class="btn btn-outline-dark">Voltar</a>
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
                            <form action="{{ route('editoras.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Editora</label>
                                    <input type="text" class="form-control" id="nome" name="nome" required>
                                </div>
                                <div class="mb-3">
                                    <label for="representante" class="form-label">Representante</label>
                                    <input type="text" class="form-control" id="representante" name="representante" required>
                                </div>
                                <div class="mb-3">
                                    <label for="telefone" class="form-label">Telefone</label>
                                    <input type="text" class="form-control" id="telefone" name="telefone" required>
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
