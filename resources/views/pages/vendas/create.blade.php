@extends('index')

@section('content')
    <form method="post" action="{{ route('cadastrar.venda') }}">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Criar Nova Venda</h1>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Numeração</label>
            <input type="text" name="numero_da_venda" class="form-control @error('numero_da_venda') is-invalid @enderror"
                disabled value=" {{ $findNumeracao }}">
            @if ($errors->has('numero_da_venda'))
                <div class="invalid-feedback">
                    {{ $errors->first('nome') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Produto</label>
            <select class="form-select" aria-label="Default select example" name="produto_id">
                <option selected>Selecione uma das opções abaixo</option>
                @foreach ($findProduto as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Cliente</label>
            <select class="form-select" aria-label="Default select example" name="cliente_id">
                <option selected>Selecione uma das opções abaixo</option>
                @foreach ($findCliente as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection
