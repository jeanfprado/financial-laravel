@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nova Conta a Pagar</div>

                <div class="card-body">

                {!! Form::open() !!}

                @include('app.accountspay._form')

                {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection