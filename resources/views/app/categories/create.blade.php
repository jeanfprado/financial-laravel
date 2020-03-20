@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nova Categoria</div>

                <div class="card-body">
                <form method="POST" action="{{ route('categories.store') }}" >
                    @csrf
                    <label>Titulo:</label>
                    <input name="title" />

                    <label>Tipo:</label>
                    <select name="type" >
                        <option value="1" >Entrada</option>
                        <option value="2" >Saída</option>
                    </select>

                    <button type="submit" >Salvar</button>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
