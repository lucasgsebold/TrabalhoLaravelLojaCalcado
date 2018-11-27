@extends('viewinicial')

@section('content')

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Data</th>
                <th>Forma de Pagamento</th>
                <th>Cliente</th>
                <th>Vendedor</th>
                <th>Calçado</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody id="tabela"></tbody>
    </table>

@endsection

@section('scripts')
<script type="text/javascript" src="js/Venda.js"></script>
@endsection