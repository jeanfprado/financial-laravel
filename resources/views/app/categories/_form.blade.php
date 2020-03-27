<div class="form-group" >
    {!! Form::label('title', 'Titulo: ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group" >
    {!! Form::label('type', 'Tipo: ') !!}
    {!! Form::select('type', [1 => 'Entrada', 2 => 'Saída'], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('parent_id', 'Categoria Pai: ') !!}
    {!! Form::select('parent_id', $parents, null, ['class' => 'form-control', 'placeholder' => 'Selecinar uma categoria pai']) !!}
</div>
