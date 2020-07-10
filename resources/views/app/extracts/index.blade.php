@extends('layouts.page')

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">          
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Filtro</div>
                        <div class="card-body">                          
              
                            <form action="" method="post" novalidate="novalidate">                                
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        {!! Form::label('person', 'Pessoas') !!}
                                        {!! Form::select('person', $people, null, ['class' => 'form-control', 'placeholder'=> 'Selecionar pessoa']) !!}
                                    </div>
                
                                    <div class="form-group col-md-3">
                                        {!! Form::label('date_init', 'Data Inicial') !!}
                                        {!! Form::date('date_init', null, ['class' => 'form-control']) !!}
                                    </div>
                
                                    <div class="form-group col-md-3">
                                        {!! Form::label('date_end', 'Data Final') !!}
                                        {!! Form::date('date_end', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div  class="col-auto">
                                        <br/>
                                       {!! Form::submit('Pesquisar', ['class' => 'btn btn-primary btn-lg']) !!}
                                        </div>
                                </div>                               
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">                      
                        <div class="card-body">
                            <div class="card-title">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Lançamentos
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-center">
                                        <a class="dropdown-item" type="button">Lançamento pagamento </a>
                                        <a class="dropdown-item" type="button">Lançamento recebimento</a>
                                    </div>
                                    </div>
                
                            </div>                           
                            <table class="table" >  
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>                                    
        
                                    </tr>
                                </thead>                           
                                <tbody>
                                    @foreach($accounts as $account)
                                    <tr>
                                        <td>{{$account->title}}</td>
                                     <td>{{$account->total}}</td>
                                    </tr>
                                    @endforeach
        
        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header">Credit Card</div>
                        <div class="card-body">
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th style="width: 145px" >Ações</th>
                                        <th>Data de Quitação</th>
                                        <th>Categoria</th>
                                        <th>Pessoa</th>
                                        <!-- <th>Descrição</th> -->
                                        <th>Valor</th>
        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($extracts as $extract)
                                    <tr>
                                     <td></td>
                                     <td>{{$extract->settled_at}}</td>
                                     <td>{{$extract->category->title}}</td>
                                     <td>{{$extract->person->name}}</td>
                                     <!--<td></td>-->
                                     <td >{{$extract->amount}}</td>
                                    </tr>
        
        
                                    @endforeach
        
        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>      
        </div>
     </div>
    </div>
</div>
@endsection