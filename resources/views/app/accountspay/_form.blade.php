<div class = 'container'>
    <div class="row">
        <div class="form-group col-md-4">
            {!! Form::label('dua_at', 'Vencimento: ') !!}
            {!! Form::date('dua_at', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('settled_at', 'Data do pagamento: ') !!}
            {!! Form::date('settled_at', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('amount', 'Valor: ') !!}
        {!! Form::number('amount', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('settled', 'Pago: ') !!}
        {!! Form::checkbox('settled', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('account_id', 'Conta: ') !!}
        {!! Form::text('account_id', null, ['class' => 'form-control', 'placeholder' => 'Selecione']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('person_id', 'Pagar a: ') !!}
        {!! Form::text('person_id', null, ['class' => 'form-control', 'placeholder' => 'Selecione']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('category_id', 'Categoria: ') !!}
        {!! Form::text('category_id', null, ['class' => 'form-control', 'placeholder' => 'Selecione']) !!}
    </div>
</div>