@extends('templates.template')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<main class="gradiente">
<form class="w-50 margin-auto m-auto" method="POST" action="{{("/edit/save/$user->idusuario")}}">
    @csrf
    @method('PUT')

    <div class="mb-3 mt-3">
        <label for="exampleInputEmail1" class="form-label">Nome</label>
        <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome Completo" 
            value="{{$user->nome}}" required />
    </div>

    <div class="mb-3 mt-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input class="form-control" type="email" id="email" name="email" placeholder="Email"
            value="{{$user->email}}" required />
    </div>

    <div class="mb-3 mt-3">
        <label for="exampleInputEmail1" class="form-label">Telefone</label>
        <input class="form-control" type="text" id="telefone" name="telefone" placeholder="Telefone"
            value="{{$user->telefone}}" required />
    </div>
    
    <div class="mb-3 mt-3">
        <label for="exampleInputEmail1" class="form-label">CPF</label>
        <input class="form-control" type="text" id="cpf" name="cpf" placeholder="CPF"
            value="{{$user->cpf}}" required />
    </div>
    
    <div class="mb-3 mt-3">
        <label for="exampleInputEmail1" class="form-label">Endereco</label>
        <input class="form-control" type="text" id="endereco" name="endereco" placeholder="Endereço"
            value="{{$user->endereco}}" required />
    </div>
 
    <button type="submit" class="btn-ativo">Alterar</button>
  </form>

  @include('sweetalert::alert')

  <!-- @if (session('status'))
        <div class="alert alert-success mt-3 text-center container w-50">
            {{ session('status') }}
        </div>
    @endif -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection