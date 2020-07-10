@extends('layouts.page')

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Editando Conta a receber</strong>
                    </div>
                    <div class="card-body card-block">
                        {!! Form::model($accountreceife,['url' => route('accountreceives.update',['accountreceife' => $accountreceife->id]), 'method' => 'PUT']) !!}

                        @include('app.accountsreceives._form')

                        {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
