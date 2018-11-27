@extends('viewinicial')

@section('content')
<br>

<div class="container">
    <div class="form-group">
        <label for="vendadata">Data da Venda</label>
        <input style="width: 400px;" type="date" class="form-control" id="vendadata" name="vendadata">
    </div>
    <div class="form-group">
        <label for="vendapagamento">Forma de Pagamento</label>
        <input style="width: 400px;" type="text" class="form-control" id="vendapagamento" name="vendapagamento">
    </div>
    <div class="form-group">
        <label for="clicodigo">Código do Cliente</label>
        <input style="width: 400px;" type="text" class="form-control" id="clicodigo" name="clicodigo">
    </div>
    <div class="form-group">
        <label for="vencodigo">Código do Vendedor</label>
        <input style="width: 400px;" type="text" class="form-control" id="vencodigo" name="vencodigo">
    </div>
    <div class="form-group">
        <label for="calcodigo">Código do Calçado</label>
        <input style="width: 400px;" type="text" class="form-control" id="calcodigo" name="calcodigo">
    </div>

    <button type="submit" id="confirmar" class="btn btn-default">Confirmar</button>
    <button class="btn btn-default">Limpar</button>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="js/Venda.js"></script>
@endsection