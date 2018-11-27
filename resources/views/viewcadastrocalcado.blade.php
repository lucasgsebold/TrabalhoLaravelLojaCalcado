@extends('viewinicial')

@section('content')
<br>

<div class="container">
    <div class="form-group">
        <label for="calmarca">Marca</label>
        <input style="width: 400px;" type="text" class="form-control" id="calmarca" name="calmarca">
    </div>
    <div class="form-group">
        <label for="caltamanho">Tamanho</label>
        <input style="width: 400px;" type="text" class="form-control" id="caltamanho" name="caltamanho">
    </div>
    <div class="form-group">
        <label for="calquantidade">Quantidade</label>
        <input style="width: 400px;" type="text" class="form-control" id="calquantidade" name="calquantidade">
    </div>
    <div class="form-group">
        <label for="calvalor">Valor</label>
        <input style="width: 400px;" type="text" class="form-control" id="calvalor" name="calvalor" placeholder="">
    </div>

    <button type="submit" id="confirmar" class="btn btn-default">Confirmar</button>
    <button class="btn btn-default">Limpar</button>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="js/Calcado.js"></script>
@endsection