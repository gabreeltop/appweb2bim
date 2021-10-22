@extends('adm.layout')

@section('content')
<a href="{{url('infopessoal/create')}}" class="button">Adicionar suas informações</a>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Gênero</th>
            <th>País</th>
            <th>Nome da Escola</th>
            <th>CPF</th>
        </tr>
    </thead>
    <tbody>
        @foreach($infopessoals as $infopessoal)
        <tr>
            <td>{{$infopessoal->user->name}}</td>
            <td>{{$infopessoal->genero}}</td>
            <td>{{$infopessoal->pais}}</td>
            <td>{{$infopessoal->escola}}</td>
            <td>{{$infopessoal->cpf}}</td>
            <td>
                <a href="{{route('infopessoal.edit',$infopessoal->id)}}" class="button">
                    Editar
                </a>
            </td>
            <td>
                <form method="POST" action="{{route('infopessoal.destroy',$infopessoal->id)}}" onsubmit="return confirm('Tem certeza?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button">
                        Remover
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection