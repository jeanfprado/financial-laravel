@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Editar Categoria </div>

                <div class="card-body">
                {!! Form::model($category, ['url' => route('categories.update', ['category' => $category->id]), 'method' =>'put']) !!}

                @include('app.categories._form')

                {!! Form::submit('Atualizar', ['class' =>'btn btn-primary']) !!}

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
