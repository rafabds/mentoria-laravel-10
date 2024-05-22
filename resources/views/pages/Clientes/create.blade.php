@extends('index')

@section('content')
    <form method="post" action="{{ route('cadastrar.cliente') }}">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Criar Novo Cliente</h1>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nome</label>
            <input type="text" name="nome" value="{{ old('nome') }}" class="form-control @error('nome') is-invalid @enderror">
            @if($errors->has('nome'))
                <div class="invalid-feedback">
                    {{ $errors->first('nome') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">E-mail</label>
            <input value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email">
            @if($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">CEP</label>
            <input id="cep" value="{{ old('cep') }}" class="form-control @error('cep') is-invalid @enderror" name="cep">
            @if($errors->has('cep'))
                <div class="invalid-feedback">
                    {{ $errors->first('cep') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Logradouro</label>
            <input id="logradouro" value="{{ old('logradouro') }}" class="form-control @error('logradouro') is-invalid @enderror" name="logradouro">
            @if($errors->has('logradouro'))
                <div class="invalid-feedback">
                    {{ $errors->first('logradouro') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Bairro</label>
            <input id="bairro" value="{{ old('bairro') }}" class="form-control @error('bairro') is-invalid @enderror" name="bairro">
            @if($errors->has('bairro'))
                <div class="invalid-feedback">
                    {{ $errors->first('bairro') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cidade</label>
            <input id="cidade" value="{{ old('cidade') }}" class="form-control @error('cidade') is-invalid @enderror" name="cidade">
            @if($errors->has('cidade'))
                <div class="invalid-feedback">
                    {{ $errors->first('cidade') }}
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection