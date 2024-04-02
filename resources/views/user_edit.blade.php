@extends('master')

@section('content')
    
    <h2>Editar</h2>

    <a href="{{ route('users.index')}}">Voltar</a>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('users.update', ['user' => $user->id])}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="row mt-3 align-items-end">
            <div class="col-md-4">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
            </div>
            <div class="col-md-4">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">
            </div>
            <div class="col-md-3">
                <button class="btn btn-md btn-primary" type="submit">
                    Editar
                </button>
            </div>
        </div>
    </form>

@endsection