@extends('adminlte::page')

@section('title', 'Lista de Serviços')

@section('content_header')
    <h1>Lista de Serviços</h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome do Serviço</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>

            @forelse ($servicos as $servico)
                <tr>
                    <th scope="row">{{ $servico->id }}</th>
                    <td>{{ $servico->nome }}</td>
                    <td>
                        <a href="{{ route('servicos.edit', $servico) }}" alt="Atualizar" title="Atualizar" class="btn btn-primary">Atualizar</a>
                    </td>
                </tr>                
            @empty
                <th></th>
                <td><strong>Nenhum serviço encontrado!</strong></td>
                <td></td>
            @endforelse

        </tbody>
    </table>

    <div class="d-flex justify-content-center">

        {{ $servicos->links() }}

    </div>

    <div class="float-right">

        <a href="{{ route('servicos.create')}}" class="btn btn-success" alt="Novo Serviço" title="Novo Serviço">Novo Serviço</a>
    </div>
    
@stop