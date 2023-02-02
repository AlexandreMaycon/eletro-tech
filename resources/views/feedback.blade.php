@extends('templates.template')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<main class="gradiente">
<form class="w-50 margin-auto m-auto" method="POST" action="{{("/feedback/save")}}">
    @csrf

    <div class="mb-3 mt-3">
        <label for="exampleInputEmail1" class="form-label">Mensagem:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" id="mensagem" name="mensagem" rows="3"></textarea>
        @error('mensagem') <div class="messageError"><li>{{$message}}</li></div> @enderror
    </div>

    <div class="mb-3 mt-3">
        <label for="exampleFormControlSelect1">Nota:</label>
        <select class="form-control" name="nota">
            <option id="nota" value="1">⚡</option>
            <option id="nota" value="2">⚡⚡</option>
            <option id="nota" value="3">⚡⚡⚡</option>
            <option id="nota" value="4">⚡⚡⚡⚡</option>
            <option id="nota" value="5">⚡⚡⚡⚡⚡</option>
        </select>
    </div>
 
    @if($teste > 0) 
     <button type="submit" class="btn-ativo">Enviar</button>
    @endif

    @if($teste === 0)
        <button type="submit" class="btn-bloqueado" disabled>Enviar</button>
        <h4 style="text-align: center; margin-top:2rem;">Você não contratou nenhum serviço</h4>
    @endif
</form>
@include('sweetalert::alert')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection