@extends('layouts.page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Contas a Receber
                    <a class="btn btn-primary btn-sm" href="{{route('accountreceives.create')}}" > Nova Contas a Receber</a>
                </div>

                <div class="card-body">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th style="width: 145px" >Ações</th>
                                <th>Conta</th>
                                <th>Vencimento</th>
                                <th>Recebido de</th>
                                <th>Categoria</th>
                                <th>Recebido em</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($accountReceives as $accountReceive)
                            <tr>
                                <td>
                                <a class="btn btn-primary btn-sm" href="{{route('accountreceives.edit', ['accountreceife' => $accountReceive->id])}}">Editar</a>
                                    <a class="btn btn-danger btn-sm" href="#" onclick="event.preventDefault();
                                            document.getElementById('destroy-form-{{$accountReceive->id}}').submit();">Excluir</a>
                                            <form id="destroy-form-{{$accountReceive->id}}" action="{{ route('extracts.destroy', ['extract' => $accountReceive->id]) }}" style="display: none;" method="post">
                                                @method('delete')
                                                @csrf
                                            </form>
                                </td>
                                <td>{{$accountReceive->account->title}}</td>
                                <td>{{$accountReceive->due_at}}</td>
                                <td>{{$accountReceive->person->name}}</td>
                                <td>{{$accountReceive->category->title}}</td>
                                <td>{{$accountReceive->settled_at}}</td>
                                <td>{{$accountReceive->amount}}</td>

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
