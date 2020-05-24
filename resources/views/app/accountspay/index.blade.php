@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Contas
                <a class="btn btn-primary btn-sm" >Nova Conta a Pagar</a>
                </div>

                <div class="card-body">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th style="width: 145px" >Ações</th>
                                <th>Id</th>
                                <th>Vencimento</th>
                                <th>Pagamento</th>
                                <th>Valor</th>
                                <th>Pago</th>
                                <th>Conta</th>
                                <th>Pagar a</th>
                                <th>Categoria</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <a class="btn btn-primary btn-sm">Editar</a>
                                    <a class="btn btn-danger btn-sm" href="" onclick="event.preventDefault();
                                            document.getElementById('destroy-form').submit();">Excluir</a>
                                            <form id="destroy-form" style="display: none;" method="post">
                                                @method('delete')
                                                @csrf
                                            </form>
                                </th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>                               
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection