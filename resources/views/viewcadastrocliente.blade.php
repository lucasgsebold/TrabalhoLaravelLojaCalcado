@extends('viewinicial')

@section('content')
<br>

<div class="container">
    <div class="form-group">
        <label for="clinome">Nome</label>
        <input style="width: 400px;" type="text" class="form-control" id="clinome" name="clinome">
    </div>
    <div class="form-group">
        <label for="clicpf">CPF</label>
        <input style="width: 400px;" type="text" class="form-control" id="clicpf" name="clicpf" placeholder="000.000.000-00">
    </div>
    <div class="form-group">
        <label for="cliemail">E-mail</label>
        <input style="width: 400px;" type="email" class="form-control" id="cliemail" name="cliemail">
    </div>
    <div class="form-group">
        <label for="cliidade">Idade</label>
        <input style="width: 400px;" type="text" class="form-control" id="cliidade" name="cliidade" placeholder="">
    </div>

    <button type="submit" id="confirmar" class="btn btn-default">Confirmar</button>
    <button class="btn btn-default">Limpar</button>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="js/Cliente.js"></script>
@endsection