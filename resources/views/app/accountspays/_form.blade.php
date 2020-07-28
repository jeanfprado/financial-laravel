    <div class="form-group">
        {!! Form::label('account_id', 'Conta: ') !!}
        {!! Form::select('account_id', $accounts,null, ['class' => 'form-control', 'placeholder' => 'Selecione']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('category_id', 'Categoria: ') !!}
        {!! Form::select('category_id', $categories,null, ['class' => 'form-control', 'placeholder' => 'Selecione']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('person_id', 'Pagar a: ') !!}
        {!! Form::select('person_id', $people, null, ['class' => 'form-control', 'placeholder' => 'Selecione']) !!}
    </div>
    <div class="form-group ">
        {!! Form::label('due_at', 'Vencimento: ') !!}
        {!! Form::date('due_at', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('amount', 'Valor: ') !!}
        {!! Form::number('amount', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('settled', 'Pago: ') !!}
        {!! Form::checkbox('settled', 1, null) !!}
    </div>
    <div class="form-group ">
        {!! Form::label('settled_at', 'Data do pagamento: ') !!}
        {!! Form::date('settled_at', null, ['class' => 'form-control']) !!}
    </div>
    @section('js')

<script src="{{asset('js/settled.js')}}"></script>
    
@endsection