@extends('layouts.page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Clientes
                <a class="btn btn-primary btn-sm" href="{{route('clients.create')}}" > Novo Cliente</a>
                </div>

                <div class="card-body">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th style="width: 145px" >Ações</th>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Documento</th>
                                <th>Telefone</th>
                                <th>Endereço</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                            <tr> 
                             <td>
                             <a class="btn btn-primary btn-sm" href="{{route('clients.edit', ['client' => $client->id])}}" >Editar</a>
                                    <a class="btn btn-danger btn-sm" href="" onclick="event.preventDefault();
                                            document.getElementById('destroy-form-{{$client->id}}').submit();">Excluir</a>
                                            <form id="destroy-form-{{$client->id}}" action="{{ route('clients.destroy', ['client' => $client->id]) }}" style="display: none;" method="post">
                                                @method('delete')
                                                @csrf
                                            </form>
                             </td>  
                             <td>{{$client->id}}</td> 
                             <td>{{$client->name}}</td>  
                             <td>{{$client->document}}</td> 
                             <td>{{$client->phone}}</td>  
                             <td>{{$client->address}}</td> 

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
