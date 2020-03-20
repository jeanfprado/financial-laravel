@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Editar Categoria </div>

                <div class="card-body">
                <form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}" >
                    @method('PUT')
                    @csrf
                    <label>Titulo:</label>
                    <input name="title" value='{{$category->title}}' />

                    <label>Tipo:</label>
                    <select name="type" >
                        <option value="1" @if($category->type == 1 ) selected @endif >Entrada</option>
                        <option value="2" @if($category->type == 2 ) selected @endif >Saída</option>
                    </select>

                    <button type="submit" >Atualizar</button>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
