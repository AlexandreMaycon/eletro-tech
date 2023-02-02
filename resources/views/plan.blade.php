@extends('templates.template')
@section('content')
<div style="background-color:#f0f0f0;">
  <h2 class="titulo-planos" style="text-align: center;">Serviços</h2>
  <div class="box">
    @foreach ($plan as $plans)
    <div class="row">
  
      
      <div class="card red">
        <h2>• {{$plans->nome}}</h2>
        <p>• {{$plans->descricao}}</p>
        <h4>• {{"R$ " . $plans->valor}}</h4><br>
        <a href="{{url("pagamento/$user->idusuario/$plans->idplano")}}">Comprar</a>
        <img class="image" src="/img/icone2.svg" alt="article" />
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection