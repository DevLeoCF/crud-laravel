@extends('master')

@section('content')
    <h2>Usuário - {{ $user->name }} ({{$user->email}})</h2>

    <a href="{{ route('users.index')}}">Voltar</a>

    <form class="mt-3" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-md btn-danger">Deletar usuário</button>
    </form>
@endsection