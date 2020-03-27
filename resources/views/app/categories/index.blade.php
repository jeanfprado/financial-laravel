@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Categorias
                <a class="btn btn-primary btn-sm" href="{{route('categories.create')}}" > Nova Categoria</a>
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
                                <th>
                                    <a class="btn btn-primary btn-sm" href="{{route('categories.edit', ['category' => $category->id])}}" >Editar</a>
                                    <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post">
                                        <input class="btn btn-default btn-sm" type="submit" value="Delete" />
                                        @method('delete')
                                        @csrf
                                    </form>
                                </th>
                                <th>{{$category->id}} </th>
                                <th>{{$category->title}}</th>
                            </tr>
                                @foreach ($category->children as $children )
                                    <tr>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{route('categories.edit', ['category' => $children->id])}}" >Editar</a>
                                            <form action="{{ route('categories.destroy', ['category' => $children->id]) }}" method="post">
                                                <input class="btn btn-default btn-sm" type="submit" value="Delete" />
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </td>
                                        <td>{{$children->id}} </td>
                                        <td>{{$children->title}}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
