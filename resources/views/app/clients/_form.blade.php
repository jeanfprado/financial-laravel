<div class="form-group" >
    {!! Form::label('name', 'Nome: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('document', 'Documento: ') !!}
    {!! Form::text('document', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('person_type', 'Tipo: ') !!}
    {!! Form::select('person_type', [1 => 'Pessoa', 2 => 'Empresa'], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('phone', 'Telefone: ') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('address', 'Enderesso: ') !!}
    {!! Form::email('address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('city', 'Cidade: ') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('state', 'Estado: ') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('zip_code', 'CEP: ') !!}
    {!! Form::number('zip_code', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group" >
    {!! Form::label('district', 'Bairro: ') !!}
    {!! Form::text('district', null, ['class' => 'form-control']) !!}
</div>