@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nova Categoria</div>

                <div class="card-body">

                {!! Form::open(['url' => route('categories.store') ]) !!}

                @include('app.categories._form')

                {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
