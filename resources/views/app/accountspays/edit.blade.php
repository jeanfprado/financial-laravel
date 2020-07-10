@extends('layouts.page')

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Editando Conta a pagar</strong>
                    </div>
                    <div class="card-body card-block">
                        {!! Form::model($accountpay,['url' => route('accountpays.update',['accountpay' => $accountpay->id]), 'method' => 'PUT']) !!}

                        @include('app.accountspays._form')
        
                        {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
        
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
