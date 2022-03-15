@extends('site.layouts.basico') {{-- @extends chama uma view --}}

@section('titulo', 'Principal') {{-- passando variável para o yield utilizando section. section('nome da variável do yield', 'valor da variável') --}}
@section('content') {{-- nome da sessão que será empurrada para o layout --}}
    <div class="conteudo-destaque">
        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.<p>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                {{-- Outro meio de passar paramêtros para o componente, é utilizando um arrayz associativo como segundo argumento do @component --}}
                @component('site.layouts._components.form_contato', ['cor_borda' => 'borda-branca']) {{-- chamando a view form_contato --}}
                @endcomponent {{-- fechando o component --}}
            </div>
        </div>
    </div>
@endsection
