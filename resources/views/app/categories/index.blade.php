@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Categorias
                <a class="btn btn-primary" href="{{route('categories.create')}}" > Nova Categoria</a>
                </div>

                <div class="card-body">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>Ações</th>
                                <th>Id</th>
                                <th>Titulo</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($categories as $category)

                            <tr>
                                <td>
                                    <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post">
                                        <input class="btn btn-default" type="submit" value="Delete" />
                                        @method('delete')
                                        @csrf
                                    </form>
                                    <a class="btn btn-primary" href="{{route('categories.edit', ['category' => $category->id])}}" >Editar</a>
                                </td>
                                <td>{{$category->id}} </td>
                                <td>{{$category->title}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
