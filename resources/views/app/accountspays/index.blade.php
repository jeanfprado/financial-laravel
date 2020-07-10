@extends('layouts.page')

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                 <!-- DATA-->
                 <div class="user-data m-b-30">
                    <h3 class="title-3 m-b-30">
                        <i class="zmdi zmdi-account-calendar"></i>Conta a pagar</h3>
                    <div class="filters m-b-45">
                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                            <a class="btn btn-primary btn-sm" href="{{route('accountpays.create')}}" > Nova Conta a pagar</a>
                        </div>                       
                    </div>
                    <div class="table-responsive table-data">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td style="width: 180px" >Ações</td>
                                    <td>Conta</td>
                                    <td>Vencimento</td>
                                    <td>Pagar a</td>
                                    <td>Categoria</td>
                                    <td>Pago em</td>
                                    <td>Valor</td>
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
                    <div class="user-data__footer">
                        
                    </div>
                </div>       
                <!-- END DATA-->         
        </div>
     </div>
    </div>
</div>
@endsection