@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Galeria</h4>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{ route('editoras.index') }}" class="btn btn-outline-dark">Editoras</a>
                            <a href="{{ route('autores.index') }}" class="btn btn-outline-dark">Autores</a>
                            <a href="{{ route('livros.index') }}" class="btn btn-outline-dark">Livros</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @forelse ($livros as $livro )
                            <div class="col" style="margin-bottom: 20px">
                                <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $livro->lancamento }} - {{ $livro->titulo }}</h5>
                                    <p class="card-text">
                                        <strong>{{ $livro->autor->nome }}</strong><br>
                                        <span>{{ $livro->editora->nome}}</span>
                                    </p>
                                </div>
                                </div>
                            </div>
                        @empty
                            <p> Nenhum livro cadastrado! </p>
                        @endforelse
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
