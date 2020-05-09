@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Editar Cliente </div>

                <div class="card-body">
                {!! Form::model($client, ['url' => route('clients.update', ['client' => $client->id]), 'method' =>'put']) !!}
                @include('app.clients._form')

                {!! Form::submit('Atualizar', ['class' =>'btn btn-primary']) !!}

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
