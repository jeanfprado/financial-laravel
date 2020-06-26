@extends('layouts.page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Filtro
                </div>

                <div class="card-body">
                {!! Form::open(['method'=>'GET']) !!}
                <div class="form-row">
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

                {!! Form::close() !!}



                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Contas
                </div>

                <div class="card-body">
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lançamentos
                    </button>
                    <div class="dropdown-menu dropdown-menu-center">
                        <a class="dropdown-item" type="button">Lançamento pagamento </a>
                        <a class="dropdown-item" type="button">Lançamento recebimento</a>

                    </div>
                    </div>

                <ul class="nav flex-column">
                    @foreach($accounts as $account)
                    <li class="nav-item">
                        <a class="nav-link" href="">{{$account->title}}</a>
                    </li>
                    @endforeach
                </ul>

                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Lançamentos

                </div>

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
@endsection
