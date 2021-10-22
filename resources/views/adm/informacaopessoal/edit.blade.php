@extends ('adm.layout')

@section('content')
@if(count($errors) > 0)
<ul class="validator">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form method="POST" action="{{url('infopessoal', $infopessoal->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <label class="col-2" for="user">Nome</label>
        <select class="col-5" name="user_id" id="user">
            <option></option>
            @foreach($users as $user)
            <option value="{{$user->id}}" @if($user->id==$infopessoal->user_id) selected @endif>{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="row">
        <label class="col-2" for="genero">Gênero</label>
        <input type="text" name="genero" id="genero" class="col-3" value="{{ $infopessoal->genero }}" />
    </div>
    <div class="row">
        <label class="col-2" for="pais">País</label>
        <input type="test" name="pais" id="pais" class="col-5" value="{{ $infopessoal->pais }}" />
    </div>
    <div class="row">
        <label class="col-2" for="escola">Nome da Escola</label>
        <input type="text" name="escola" id="escola" class="col-5" value="{{ $infopessoal->escola }}" />
    </div>
    <div class="row">
        <label class="col-2" for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" class="col-4" value="{{ $infopessoal->cpf }}" />
    </div>
    <button type="submit" class="button">Salvar</button>
</form>
@endsection