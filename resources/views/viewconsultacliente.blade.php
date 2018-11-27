@extends('viewinicial')

@section('content')

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Idade</th>
                <th>E-mail</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody id="tabela"></tbody>
    </table>

@endsection

@section('scripts')
<script type="text/javascript" src="js/Cliente.js"></script>
@endsection