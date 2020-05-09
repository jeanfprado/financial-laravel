@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    fornecedor
                <a class="btn btn-primary btn-sm" href="{{route('providers.create')}}" > Novo Fornecedor</a>
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
                            @foreach($providers as $provider)
                            <tr> 
                             <td>
                             <a class="btn btn-primary btn-sm" href="{{route('providers.edit', ['provider' => $provider->id])}}" >Editar</a>
                                    <a class="btn btn-danger btn-sm" href="" onclick="event.preventDefault();
                                            document.getElementById('destroy-form-{{$provider->id}}').submit();">Excluir</a>
                                            <form id="destroy-form-{{$provider->id}}" action="{{ route('providers.destroy', ['provider' => $provider->id]) }}" style="display: none;" method="post">
                                                @method('delete')
                                                @csrf
                                            </form>
                             </td>  
                             <td>{{$provider->id}}</td> 
                             <td>{{$provider->name}}</td>  
                             <td>{{$provider->document}}</td> 
                             <td>{{$provider->phone}}</td>  
                             <td>{{$provider->address}}</td> 

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
