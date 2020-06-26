@extends('layouts.page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Contas
                <a class="btn btn-primary btn-sm" href="{{route('accounts.create')}}" > Nova Conta</a>
                </div>

                <div class="card-body">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th style="width: 145px" >Ações</th>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($accounts as $account)
                            <tr>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{route('accounts.edit', ['account' => $account->id])}}" >Editar</a>
                                    <a class="btn btn-danger btn-sm" href="" onclick="event.preventDefault();
                                            document.getElementById('destroy-form').submit();">Excluir</a>
                                            <form id="destroy-form" action="{{ route('accounts.destroy', ['account' => $account->id]) }}" style="display: none;" method="post">
                                                @method('delete')
                                                @csrf
                                            </form>
                                </td>
                                <td>{{$account->id}} </td>
                                <td>{{$account->title}}</td>
                                <td>{{ __($account->type) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
