@extends('layouts.page')

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                 <!-- DATA-->
                 <div class="user-data m-b-30">
                    <h3 class="title-3 m-b-30">
                        <i class="zmdi zmdi-account-calendar"></i>Contas</h3>
                    <div class="filters m-b-45">
                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                        <a class="btn btn-outline-primary" href="{{route('accounts.create')}}" > Nova Conta</a>
                        </div>                       
                    </div>
                    <div class="table-responsive table-data">
                        <table class="table">
                            <thead>
                                <tr>   
                                    <td style="width:180px" ></td>                                 
                                    <td>Conta</td>
                                    <td>Tipo</td>
                                    <td>Total</td>
                                    
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
                                    <td>{{$account->title}}</td>
                                    <td>{{ __($account->type) }}</td>
                                    <td></td>
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
