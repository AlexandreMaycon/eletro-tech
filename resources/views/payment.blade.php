@extends('templates.template')
@section('content')
<div class="gradiente" style="color: black; height: 85.65vh;">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="/js/script.js"></script>
        <main>
            <form class="w-50 margin-auto m-auto" method="POST" action="{{ "/payment/save/$user->idusuario/$plan" }}">
                @csrf
                <div class="container">
                    <div>
                        <h4 class="mb-3">Dados de cobrança</h4>
                        <form class="needs-validation" novalidate="">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Nome</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                        required="">

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Sobrenome</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                        required="">

                                </div>
                            </div>
                            <hr class="mb-4">
                            <h4 class="mb-3">Pagamento</h4>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"
                                        checked="" required="">
                                    <label class="custom-control-label" for="credit">Cartão de crédito</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                        required="">
                                    <label class="custom-control-label" for="debit">Cartão de débito</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                        required="">
                                    <label class="custom-control-label" for="paypal">PayPal</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Nome no cartão</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">


                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">número no cartão</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required="">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiração</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder=""
                                        required="">

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-cvv">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">

                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="cc-cvv">Escolha o Dia</label>
                                    <input type="date" class="form-control" id="data" name="data" placeholder=""
                                        required="" min="2023-02-02">

                                </div>
                            </div>
                            <button class="btn-ativo" type="submit">Continuar</button>
                        </form>
                    </div>
                </div>
    </div>
    </form>
    @include('sweetalert::alert')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    </div>
@endsection
