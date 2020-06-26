@extends('layouts.page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Editar Conta </div>

                <div class="card-body">
                {!! Form::model($account, ['url' => route('accounts.update', ['account' => $account->id]), 'method' =>'put']) !!}
                @include('app.accounts._form')

                {!! Form::submit('Atualizar', ['class' =>'btn btn-primary']) !!}

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
