@extends('viewinicial')

@section('content')
<br>

<div class="container">
    <div class="form-group">
        <label for="vennome">Nome</label>
        <input style="width: 400px;" type="text" class="form-control" id="vennome" name="vennome">
    </div>
    <div class="form-group">
        <label for="vencpf">CPF</label>
        <input style="width: 400px;" type="text" class="form-control" id="vencpf" name="vencpf" placeholder="000.000.000-00">
    </div>
    <div class="form-group">
        <label for="venemail">E-mail</label>
        <input style="width: 400px;" type="email" class="form-control" id="venemail" name="venemail">
    </div>

    <button type="submit" id="confirmar" class="btn btn-default">Confirmar</button>
    <button class="btn btn-default">Limpar</button>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="js/Vendedor.js"></script>
@endsection