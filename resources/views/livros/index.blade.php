@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Livros</h4>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="{{ route('livros.create') }}" class="btn btn-outline-success">Cadastrar Livro</a>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{ route('home') }}" class="btn btn-outline-primary">Galeria</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($itens == '[]')
                        <p>Nenhum livro cadastrado</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Cod</th>
                                    <th scope="col">Autor</th>
                                    <th scope="col">Editora</th>
                                    <th scope="col">Gênero</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Ano</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($itens as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->autor->nome }}</td>
                                        <td>{{ $item->editora->nome }}</td>
                                        <td>{{ $item->genero }}</td>
                                        <td>{{ $item->titulo }}</td>
                                        <td>{{ $item->lancamento }}</td>
                                        <td class="text-right">
                                            <a href="{{ route('livros.edit',$id = $item->id) }}" class="btn btn-primary">Editar</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('livros.destroy', ['id' => $item->id]) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
