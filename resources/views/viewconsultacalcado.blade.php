@extends('viewinicial')

@section('content')

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Marca</th>
                <th>Tamanho</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody id="tabela"></tbody>
    </table>

@endsection

@section('scripts')
<script type="text/javascript" src="js/Calcado.js"></script>
@endsection