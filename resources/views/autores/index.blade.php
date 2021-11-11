@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Autores</h4>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="{{ route('autores.create') }}" class="btn btn-outline-success">Cadastrar Autor</a>
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
                        <p>Nenhuma autor cadastrada</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Cod</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Nascimento</th>
                                    <th scope="col">Sexo</th>
                                    <th scope="col">Nacionalidade</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($itens as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->nome }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->nascimento)->format('d/m/Y')}}</td>
                                        <td>{{ $item->sexo }}</td>
                                        <td>{{ $item->nacionalidade }}</td>
                                        <td class="text-right">
                                            <a href="{{ route('autores.edit',$id = $item->id) }}" class="btn btn-primary">Editar</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('autores.destroy', ['id' => $item->id]) }}" method="post">
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
