@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendas</h1>
    </div>
    <div>
        <form action="{{ route('vendas.index') }}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome">
            <button> Pesquisar </button>
            <a type="button" href=" {{ route('cadastrar.venda') }}" class="btn btn-success float-end">
                Incluir Venda
            </a>
        </form>
        <div class="table-responsive small mt-4">
            @if ($findVendas->isEmpty())
                <p>Não existem dados</p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Pedido</th>
                            <th>Produto</th>
                            <th>Cliente</th>
                            <td>Ações</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findVendas as $venda)
                            <tr>
                                <td>{{ $venda->numero_da_venda }}</td>
                                <td>{{ $venda->produto->nome }}</td>
                                <td>{{ $venda->cliente->nome }}</td>
                                <td>
                                    <a href="{{ route('enviaComprovantePorEmail.venda', $venda->numero_da_venda) }}"
                                        class="btn btn-light btn-sm">
                                        Enviar E-mail
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection
