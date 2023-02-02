@extends('templates.template')
@section("content")
<div class="container">
        <div class="sobre">
            <h3>Sobre nós</h3>
            <div class="historia">
                <div class="historia-imagem">
                    <img src="/img/img1.jpg" alt="" class="imagem-sobre">
                </div>

                <div class="historia-texto">
                    <h2>Nossa História</h2>
                    <p>A EletroTech foi fundada em 2011 e desde o início visa melhorar e renovar os serviços de manutenção elétrica
                        .</p>
                    <p> Nosso intuito é levar agilidade, conforto e segurança para todos. Por meio do nosso site, você consegue contratar e agendar
                        o serviço que desejar, além de receber toda confirmação direto no seu celular.
                </p>
                </div>
            </div>
        </div>

        <div class="valores">
            <div class="historia">
                <div class="valores-texto">
                    <h2>Somos motivados por valores</h2>
                    <p>Nossos valores éticos e morais visam sempre o melhor para nossos clientes e profissionais para um
                        bom ambiente de trabalho. A nossa empresa mira atender a todos os critérios de
                        sustentabilidade. </p>
                </div>

                <div class="historia-imagem">
                    <img src="/img/img2.png" alt="" class="imagem-valores">
                </div>
            </div>
        </div>
    </div>

    <div class="qualidades">
        <div class="qualidades-box">
            <img src="/img/icone.svg" alt="" class="check">
            <h3>Super Eficiente</h3>
            <p>Nossa plataforma é muito simples de ser utilizada e tem várias funcionalidades. </p>
        </div>

        <div class="qualidades-box">
            <img src="/img/icone.svg" alt="" class="check">
            <h3>Comprometimento Máximo</h3>
            <p>Estamos sempre atualizando nossos serviços para te atender melhor. </p>
        </div>

        <div class="qualidades-box">
            <img src="/img/icone.svg" alt="" class="check">
            <h3>Altamente Qualificados</h3>
            <p> Temos os melhores profissionais ao seu dispor. </p>
        </div>
    </div>
@endsection
