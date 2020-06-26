@extends('layouts.page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nova Conta a Receber</div>

                <div class="card-body">

                {!! Form::model($accountreceife,['url' => route('accountreceives.update',['accountreceife' => $accountreceife->id]), 'method' => 'PUT']) !!}

                @include('app.accountsreceives._form')

                {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
