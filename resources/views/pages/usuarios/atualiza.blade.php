@extends('index')

@section('content')
    <form method="POST" action="{{ route('atualizar.usuario', $findUsuario->id) }}">
        @csrf
        @method('PUT')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Atualizar Usuário</h1>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nome</label>
            <input type="text" name="name" value="{{ isset($findUsuario->name) ? $findUsuario->name : old('name') }}"
                class="form-control @error('name') is-invalid @enderror">
            @if ($errors->has('name'))
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input value="{{ isset($findUsuario->email) ? $findUsuario->email : old('email') }}"
                class="form-control @error('email') is-invalid @enderror" name="email">
            @if ($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Senha</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
            @if ($errors->has('password'))
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection
