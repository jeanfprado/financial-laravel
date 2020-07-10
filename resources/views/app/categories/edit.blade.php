@extends('layouts.page')

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Editando Categoria</strong>
                    </div>
                    <div class="card-body card-block">
                        {!! Form::model($category, ['url' => route('categories.update', ['category' => $category->id]), 'method' =>'put']) !!}
                        @include('app.categories._form')
        
                        {!! Form::submit('Atualizar', ['class' =>'btn btn-primary']) !!}
        
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
