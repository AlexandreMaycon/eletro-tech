<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro/Login</title>

    <link rel="stylesheet" href="/css/cadastro.css">
    <script defer src="/js/login.js"></script>
    <script defer src="/js/script.js"></script>
</head>

<body>
    <main>
        <div class="login-container" id="login-container">
            <div class="form-container">
                <!-- LOGIN -->
                <form action="{{ route('login.custom') }}" method="post" name="entrar" id="form-login" class="form form-login">
                    @csrf

                    <h2 class="form-title">Fazer Login</h2>

                    <p class="form-text"> Utilize sua conta</p>
                    <p>Digite seu Email e password para entrar </p>
                    <div class="form-input-container">

                        <input class="form-input" type="text" id="email" name="email" placeholder="Email" />
                        @error('email') <div class="messageError"><li>{{$message}}</li></div> @enderror

                        <input class="form-input" type="password" id="password" name="password"  placeholder="password" />
                        @error('password') <div class="messageError"><li>{{$message}}</li></div> @enderror

                    </div>
                    <button class="form-button" type="submit">Entrar</button>
                    <p class="mobile-text">
                        Não tem conta?
                        <a href="#" id="open-register-mobile">Registre-se</a>
                    </p>

                </form>

                <!-- CADASTRO -->
                <form action="{{ route('register.custom') }}" class="form form-register" method="post" id="form-cadastro" name="cad">
                    @csrf

                    <div class="form-input-container">
                        <input class="form-input" type="text" id="nome" name="nome" placeholder="Nome Completo" />
                        @error('nome') <div class="messageError"><li>{{$message}}</li></div> @enderror

                        <input class="form-input" type="text" id="email" name="email" placeholder="Email" />
                        @error('email') <div class="messageError"><li>{{$message}}</li></div> @enderror

                        <input class="form-input" type="text" id="telefone" name="telefone" placeholder="Telefone" maxlength="15" onkeyup="handlePhone(event)" />
                        @error('telefone') <div class="messageError"><li>{{$message}}</li></div> @enderror

                        <input class="form-input" type="text" id="cpf" name="cpf" placeholder="CPF" maxlength="14"/>
                        @error('cpf') <div class="messageError"><li>{{$message}}</li></div> @enderror

                        <input class="form-input" type="text" id="endereco" name="endereco" placeholder="Endereço" />
                        @error('endereco') <div class="messageError"><li>{{$message}}</li></div> @enderror

                        <input class="form-input" type="password" id="password" name="password" placeholder="password" />
                        @error('password') <div class="messageError"><li>{{$message}}</li></div> @enderror

                    </div>
                    <button class="form-button" type="submit">Cadastrar</button>
                    <p class="mobile-text">
                        Já tem conta?
                        <a href="#" id="open-login-mobile">Login</a>
                    </p>
                </form>
            </div>

            @include('sweetalert::alert')

            <div class="overlay-container">
                <div class="overlay">
                    <h2 class="form-title form-title-light">Já tem conta?</h2>
                    <p class="form-text">Para entrar na nossa plataforma faça login com suas informações</p>
                    <button class="form-button form-button-light" id="open-login">Entrar</button>
                </div>
                <div class="overlay">
                    <h2 class="form-title form-title-light">Bem vindo(a)</h2>
                    <p class="form-text">Cadastre-se e comece a usar a nossa plataforma on-line</p>
                    <button class="form-button form-button-light" id="open-register">Cadastrar</button>
                </div>
            </div>
        </div>
    </main>
</body>

<script type="text/javascript">

    function _Cadastrar() {
        _Eventos.setInfo('user', document.querySelector('#form-cadastro'), ['cadastrar']);
        moveOverlay();
    }

    function _Login() {
        _Eventos.session(document.querySelector('#form-login'));
    }
</script>

</html>