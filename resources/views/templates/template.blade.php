<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/sobre.css">
</head>

<body style="color:#2a2344">

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <dialog id="dialogv2">
            <header>
                <button class="close-dialog-btn" onclick="this.closest('dialog').close('close')">
                <font color="white">X</font>
            </button>
            </header>
            
            <h5><span>Nome: </span> {{$user->nome}}</h5>
            <h5><span>Telefone: </span> {{$user->telefone}}</h5>
            <h5><span>CPF:  </span> {{$user->cpf}}</h5>
            <h5><span>Endereço: </span> {{$user->endereco}}</h5>
           
        </dialog>
            <a href="{{url("/dashboard/$user->idusuario")}}">Início</a>
            <button onclick="dialogv2.showModal()" class="perfil">Perfil</button>
            <a href="{{url("/feedback/$user->idusuario")}}">Avalie seu Serviço</a>
            <a href="{{url("/edit/$user->idusuario")}}">Altere seus Dados</a>
            <a href="{{url("/plan/$user->idusuario")}}">Nossos Planos</a>
            <a href="{{route("signout")}}">Sair</a>
    </div>
        <header>
            <div id="main">
                <div style="font-size:30px;cursor:pointer; display:flex; align-items: center;" onclick="openNav()" id="hamburguer">&#9776;</div>
                <img src="/img/logo.png" alt="">
            </div>
        </header>

        

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            //document.getElementById("main").style.marginLeft = "250px";
            let hamburguer = document.getElementById("hamburguer").style.display='none'
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            let hamburguer = document.getElementById("hamburguer");
            hamburguer.style.display='block';
            hamburguer.style.alignItems='center';

        }
    </script>

    @yield('content')
    @include('sweetalert::alert')
</body>

<script src="https://kit.fontawesome.com/293e2d2061.js" crossorigin="anonymous"></script>

</html>