@extends('layouts.page')

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                 <!-- DATA-->
                 <div class="user-data m-b-30">
                    <h3 class="title-3 m-b-30">
                        <i class="zmdi zmdi-account-calendar"></i>Categorias</h3>
                    <div class="filters m-b-45">
                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                            <a class="btn btn-primary btn-sm" href="{{route('categories.create')}}" > Nova Categoria</a>
                        </div>                       
                    </div>
                    <div class="table-responsive table-data">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td style="width: 180px" >Ações</td>
                                <td>Titulo</td>
                                <td>Tipo</td>
                                </tr>
                            </thead>
                            <tbody>                                
                                @foreach($categories as $category)
                                <tr>
                                    <th>
                                        <a class="btn btn-primary btn-sm" href="{{route('categories.edit', ['category' => $category->id])}}" >Editar</a>
                                        <a class="btn btn-danger btn-sm" href="" onclick="event.preventDefault();
                                                document.getElementById('destroy-form').submit();">Excluir</a>
                                                <form id="destroy-form" action="{{ route('categories.destroy', ['category' => $category->id]) }}" style="display: none;" method="post">
                                                    @method('delete')
                                                    @csrf
                                                </form>
                                    </th>
                                    
                                    <th>{{$category->title}}</th>
                                    <td>{{__($category->type)}} </td>
                                </tr>
                                    @foreach ($category->children as $children )
                                        <tr>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{route('categories.edit', ['category' => $children->id])}}" >Editar</a>
                                                <a class="btn btn-danger btn-sm" href="" onclick="event.preventDefault();
                                                document.getElementById('destroy-form').submit();">Excluir</a>
                                                <form id="destroy-form" action="{{ route('categories.destroy', ['category' => $children->id]) }}" style="display: none;" method="post">
                                                    @method('delete')
                                                    @csrf
                                                </form>
                                            </td>
                                          
                                            <td>{{$children->title}}</td>
                                            <td>{{__($children->type)}} </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="user-data__footer">
                        
                    </div>
                </div>       
                <!-- END DATA-->         
        </div>
     </div>
    </div>
</div>
@endsection

