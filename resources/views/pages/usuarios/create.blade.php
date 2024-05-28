@extends('index')

@section('content')
    <form method="post" action="{{ route('cadastrar.usuario') }}">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Criar Novo Usuario</h1>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nome</label>
            <input type="text" name="name" value="{{ old('name') }}"
                class="form-control @error('name') is-invalid @enderror">
            @if ($errors->has('name'))
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email">
            @if ($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Senha</label>
            <input type="password" value="{{ old('password') }}"
                class="form-control @error('password') is-invalid @enderror" name="password">
            @if ($errors->has('password'))
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection
