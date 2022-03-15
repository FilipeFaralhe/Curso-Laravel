@extends('site.layouts.basico') {{-- @extends chama uma view --}}

{{-- Podemos encaminhar variáveis das controllers para outras views atráves da section --}}
@section('titulo', $titulo) {{-- passando variável para o yield utilizando section. section('nome da variável do yield', 'valor da variável') --}}
@section('content') {{-- nome da sessão que será empurrada para o layout --}}
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>
        <div class="informacao-pagina">
            <div class="contato-principal">
                {{-- Outro meio de passar paramêtros para o componente, é utilizando um arrayz associativo como segundo argumento do @component --}}
                @component('site.layouts._components.form_contato', ['cor_borda' => 'borda-preta']) {{-- chamando a view form_contato --}}
                    {{-- Passando paramêtro para o componente --}}
                    <p>A nossa equipe analisára sua mensagem e retornaremos o mais brevemente possível</p>
                    <p>Nossa tempo médio de resposta é de 48 horas.</p>
                @endcomponent {{-- fechando o componente --}}
            </div>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection

