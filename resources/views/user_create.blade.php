@extends('master')

@section('content')
    
    <h2>Criar novo usuário</h2>

    <a href="{{ route('users.index')}}">Voltar</a>


    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('users.store')}}" method="POST">
        @csrf
        <div class="row mt-3 align-items-end">
            <div class="col-md-4">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Insira seu nome">
            </div>
            <div class="col-md-4">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Insira seu e-mail">
            </div>
            <div class="col-md-4">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Crie uma senha">
            </div>
            <div class="col-md-4 mt-3">
                <button class="btn btn-md btn-primary" type="submit">
                    Criar
                </button>
            </div>
        </div>
    </form>

@endsection