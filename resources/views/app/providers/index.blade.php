@extends('layouts.page')

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                 <!-- DATA-->
                 <div class="user-data m-b-30">
                    <h3 class="title-3 m-b-30">
                        <i class="zmdi zmdi-account-calendar"></i>Fornecedores</h3>
                    <div class="filters m-b-45">
                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                            <a class="btn btn-primary btn-sm" href="{{route('providers.create')}}" > Novo Fornecedor</a>
                        </div>                       
                    </div>
                    <div class="table-responsive table-data">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td style="width: 180px" >Ações</td>
                                    <td>Id</td>
                                    <td>Nome</td>
                                    <td>Documento</td>
                                    <td>Telefone</td>
                                    <td>Endereço</td>
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
                    <div class="user-data__footer">
                        
                    </div>
                </div>       
                <!-- END DATA-->         
        </div>
     </div>
    </div>
</div>
@endsection