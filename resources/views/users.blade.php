@extends('master')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h2>Lista de usuários</h2>
        <a href="{{ route('users.create')}}" class="btn btn-md btn-success"><i class="fa-solid fa-plus"></i> Usuário</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="align-middle">{{ $user->name}}</td>
                    <td class="align-middle">{{ $user->email}}</td>
                    <td class="align-middle" style="width: 6.688rem;">
                        <a href="{{ route('users.show', ['user' => $user->id]) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                        <a style="color:#ffffff" href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection