@extends('layouts.page')

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Novo Fornecedor</strong>
                    </div>
                    <div class="card-body card-block">
                        {!! Form::open(['url'=>route('providers.store')]) !!}

                        @include('app.providers._form')
        
                        {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
        
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
