@extends('layouts.page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Editar Fornecedor </div>

                <div class="card-body">
                {!! Form::model($provider, ['url' => route('providers.update', ['provider' => $provider->id]), 'method' =>'put']) !!}
                @include('app.providers._form')

                {!! Form::submit('Atualizar', ['class' =>'btn btn-primary']) !!}

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
