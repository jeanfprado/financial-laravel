@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Contas a Pagar
                    <a class="btn btn-primary btn-sm" href="{{route('accountpays.create')}}" > Nova Conta a pagar</a>
                </div>

                <div class="card-body">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th style="width: 145px" >Ações</th>
                                <th>Conta</th>
                                <th>Vencimento</th>
                                <th>Pagar a</th>
                                <th>Categoria</th>
                                <th>Pago em</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($accountPays as $accountPay)
                            <tr>
                                <td>
                                <a class="btn btn-primary btn-sm" href="{{route('accountpays.edit', ['accountpay' => $accountPay->id])}}">Editar</a>
                                    <a class="btn btn-danger btn-sm" href="#" onclick="event.preventDefault();
                                             document.getElementById('destroy-form-{{$accountPay->id}}').submit();">Excluir</a>
                                            <form id="destroy-form-{{$accountPay->id}}" action="{{route('extracts.destroy', ['extract' => $accountPay->id])}}" style="display: none;" method="post">
                                                @method('delete')
                                                @csrf
                                            </form>
                                </td>
                                <td>{{$accountPay->account->title}}</td>
                                <td>{{$accountPay->due_at}}</td>
                                <td>{{$accountPay->person->name}}</td>
                                <td>{{$accountPay->category->title}}</td>
                                <td>{{$accountPay->settled_at}}</td>
                                <td>{{$accountPay->amount}}</td>

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
