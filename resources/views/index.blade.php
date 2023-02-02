<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="https://kit.fontawesome.com/293e2d2061.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/dashboard.css">

    <script src="js/main.js">

    </script>
    <!-- CSS only -->
    <title>EletroTech</title>
</head>

<body>
    <header>
        <section class="navbar">
            <section id="logo">
                <p>Eletro<span>Tech</span></p>
            </section>
            <nav class="menu">
                <ul>
                    <li><a id="user-session" href="{{url("/login")}}">Entrar</a></li>
                </ul>
            </nav>
        </section>
        <section class="secaoDestaque" style="padding-top: 3rem">
            <p class="texto-cabecalho">Somos a maior empresa de manutenção elétrica de todo o Brasil</p>
            <button style="margin-top: 3rem"><a href="{{url("/login")}}">Conheça nossos serviços</a></button>
        </section>
    </header>
    <main>
        <h3 class="titulo-planos" style="text-align: center">Alguns de Nossos Serviços</h3>
        <div class="box"> 
            @foreach ($plan->take(3) as $plans)
            <div class="row">
                <div class="card red">
                    <h4>• {{$plans->nome}}</h4>
                    <p>• {{$plans->descricao}}</p>
                    <h5>• {{"R$ " . $plans->valor}}</h5><br>
                    <a href="{{url("/login")}}">Comprar</a>
                    <img class="image" src="/img/icone2.svg" alt="article" />
                </div>
            </div>
            @endforeach
        </div>

        <h3 class="titulo-planos" style="text-align: center">Feedbacks</h3>
        <div class="box">
                @foreach ($feedback->take(3) as $feedbacks)
                    <div class="row">
                        <div class="card red" style="text-align: center">
                            <h6><svg width="30" height="33" viewBox="0 0 37 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.6467 19.5122C21.2342 19.5122 23.7157 18.4843 25.5453 16.6547C27.375 14.8251 28.4028 12.3436 28.4028 9.7561C28.4028 7.16862 27.375 4.68712 25.5453 2.85749C23.7157 1.02787 21.2342 0 18.6467 0C16.0593 0 13.5778 1.02787 11.7481 2.85749C9.91852 4.68712 8.89064 7.16862 8.89064 9.7561C8.89064 12.3436 9.91852 14.8251 11.7481 16.6547C13.5778 18.4843 16.0593 19.5122 18.6467 19.5122ZM18.6467 24.3902C8.87113 24.3902 0.910156 30.9463 0.910156 39.0244C0.910156 39.5707 1.33942 40 1.88577 40H35.4077C35.9541 40 36.3833 39.5707 36.3833 39.0244C36.3833 30.9463 28.4224 24.3902 18.6467 24.3902Z" fill="black"/>
                                </svg></h6>
                            <h6>{{$feedbacks->mensagem}}</h6>
                            <h6><b>{{"Nota: ".$feedbacks->nota}}</b></h6>
                        </div>
                    </div>
                @endforeach
        </div>
    </main>

    <footer>
        <nav class="footer-bar">
            <section class="logo-footer">
                <h4>EletroTech</h4>
            </section>

            <ul class="copy">
                <li>EletroTech © 2022 - Todos os direitos reservados.</li>
            </ul>
            <ul class="contatos">
                <li>@EletroTech</i></li>
                <li>(031)9131-31313</i></li>
                <li>EletroTech@gmail.com</li>
            </ul>
        </nav>
    </footer>

</body>
<script type="text/javascript">
    _Eventos.execSession();
</script>

<!-- JavaScript Bundle with Popper -->
{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script> --}}
<script src="https://kit.fontawesome.com/293e2d2061.js" crossorigin="anonymous"></script>
</html>