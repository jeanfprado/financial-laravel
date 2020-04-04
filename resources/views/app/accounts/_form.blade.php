    <div class="form-group" >
        {!! Form::label('title', 'Titulo: ', ['class' => 'col-form-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control required ']) !!}
    </div>  
    <div class="form-group" >
        {!! Form::label('type', 'Tipo: ', ['class' => 'col-form-label']) !!}
        {!! Form::select('type', ['wallet' => 'Carteira', 'bank' => 'Banco', 'credit_card' => 'Cartão de Crédito'], null, ['class' => 'form-control']) !!}
    </div>

<div id="other" >
    <div class="form-group" >
        {!! Form::label('date_balance', 'Data de Saldo Inicial: ', ['class' => 'col-form-label']) !!}
        {!! Form::date('date_balance', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group" >
        {!! Form::label('balance', 'Saldo Inicial: ', ['class' => 'col-form-label']) !!}
        {!! Form::number('balance', null, ['class' => 'form-control']) !!}
    </div>
  
</div>
<div id="credit" >
    <div class="form-group" >   
        {!! Form::label('credit_close', 'Dia de Fechamento: ', ['class' => 'col-form-label']) !!}
        {!! Form::selectRange('credit_close', 01,31,null, ['class' => 'form-control', 'placeholder' => 'Informe o dia vencimento']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('credit_due', 'Dia de Vencimento: ', ['class' => 'col-form-label']) !!}
        {!! Form::selectRange('credit_due', 01,31,null, ['class' => 'form-control', 'placeholder' => 'Informe o dia vencimento']) !!}
    </div>
    <div class="form-group" >
        {!! Form::label('credit_number', 'Últimos 4 Digitos do Cartão: ', ['class' => 'col-form-label']) !!}
        {!! Form::number('credit_number', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group" >
        {!! Form::label('credit_limit', 'Limite: ', ['class' => 'col-form-label']) !!}
        {!! Form::number('credit_limit', null, ['class' => 'form-control']) !!}
    </div>
</div>
@section('js')

<script>
 $(document).ready(function () {
     $('#type').change(function(){
        if($(this).val() === 'credit_card'){
            $('#credit').show();
            $('#other').hide();
        }else {
            $('#credit').hide();
            $('#other').show();
        }
     }).change();
 });

</script>
    
@endsection

