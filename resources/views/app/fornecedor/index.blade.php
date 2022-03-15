<h3>Fornecedor</h3>

{{-- Comentários em um arquivo .blade --}}
{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

{{-- Bloco PHP puro --}}
{{ 'isso é a mesma coisa' }}
<br>
<?= 'que isso' ?>

<br>

@php
  //if utilizando o php puro
  if(false) {
    echo 'teste';
  } elseif (false) {
	echo 'teste';
  } else {
	echo 'teste';
  }
@endphp
<br>
{{--
    @dd funciona tipo um console
    @dd($fornecedores)
--}}


Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}


{{-- IF na sintexe do blade --}}
@if(strtolower($fornecedores[0]['status'])  === 'n')
    <h3>Fornecedor Inativo</h3>
@elseif(strtolower($fornecedores[0]['status'])  === 's')
    <h3>Fornecedor Ativo</h3>
@else
    <h3>Status inexistente</h3>
@endif

{{-- UNLESS --}}
{{--
    descrição: o unless funciona como um if negado, retorna uma condição falsa.

    Exemplo:
    @if(!condição)

    @endif

    @unless(condição)

    @endunless

    Ambos vão entregar o mesmo resultado
--}}

@unless(strtolower($fornecedores[0]['status'])  === 'n')
    <h3>Fornecedor Ativo</h3>
@endunless


{{-- ISSET --}}
@php
    //Retorna true se a variável estiver definida
    /*
     if(isset($variavel)) {
      echo "entrei";
     }*/
@endphp

{{-- Caso a variável não estaja definada, o bloco é descartado sem dar erros --}}
@isset($fornecedores)
    Fornecedores: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @endisset
@endisset

<br>

{{-- EMPTY --}}
@php
    // Caso o variável esteja vazia, o empty irá retornar true
    // Que valores são necessários para uma variável ser considera vazia?
    /*
      - ''
      - 0
      - 0.0
      - '0'
      - null
      - false
      - array() array vazio
      - $var variável sem nenhuma definição de valor
    */

    /*
    $variavel = null;
    if(empty($variavel)) {
      echo 'entrei';
    }
    */
@endphp

Fornecedores: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
CNPJ: {{ $fornecedores[0]['cnpj'] }}
{{-- o bloco é ativado caso o cnpj seja um valor vazio --}}
@empty($fornecedores[0]['cnpj'])
    - CNPJ VAZIO
@endempty

<br>

{{-- SWITCH CASE --}}
@isset($fornecedores)
    Fornecedores: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['cnpj'] }}
    {{-- o bloco é ativado caso o cnpj seja um valor vazio --}}
    @empty($fornecedores[0]['cnpj'])
        - CNPJ VAZIO
    @endempty
    Telefone: ({{ $fornecedores[1]['ddd'] ?? '' }}) ({{ $fornecedores[1]['telefone'] ?? '' }})
    @switch($fornecedores[1]['ddd'])
        @case ('11')
            São Paulo - (SP)
            @break
        @case ('32')
            Juiz de Fora - (MG)
            @break
        @case ('85')
            Fortaleza - (CE)
            @break
        @default
            Sem DD informado
    @endswitch
@endisset

<br>
<br>

{{-- FOR --}}
@isset($fornecedores)
    <h2>FOR</h2>
    @for($i = 0; $i < count($fornecedores); $i++)
        Fornecedores: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] }}
        {{-- o bloco é ativado caso o cnpj seja um valor vazio --}}
        @empty($fornecedores[$i]['cnpj'])
            - CNPJ VAZIO
        @endempty
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) ({{ $fornecedores[$i]['telefone'] ?? '' }})
        @switch($fornecedores[$i]['ddd'])
            @case ('11')
            São Paulo - (SP)
            @break
            @case ('32')
            Juiz de Fora - (MG)
            @break
            @case ('85')
            Fortaleza - (CE)
            @break
            @default
            Sem DD informado
        @endswitch
        <hr>
        <br>
    @endfor
@endisset

{{-- WHILE --}}
@isset($fornecedores)
    <h2>WHILE</h2>
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedores: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] }}
        {{-- o bloco é ativado caso o cnpj seja um valor vazio --}}
        @empty($fornecedores[$i]['cnpj'])
            - CNPJ VAZIO
        @endempty
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) ({{ $fornecedores[$i]['telefone'] ?? '' }})
        @switch($fornecedores[$i]['ddd'])
            @case ('11')
            São Paulo - (SP)
            @break
            @case ('32')
            Juiz de Fora - (MG)
            @break
            @case ('85')
            Fortaleza - (CE)
            @break
            @default
            Sem DD informado
        @endswitch
        @php $i++ @endphp
        <hr>
        <br>
    @endwhile
@endisset

{{-- FOREACH --}}
@isset($fornecedores)
    <h2>FOREACH</h2>
    @foreach($fornecedores as $fornecedor)
        Fornecedores: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] }}
        {{-- o bloco é ativado caso o cnpj seja um valor vazio --}}
        @empty($fornecedor['cnpj'])
            - CNPJ VAZIO
        @endempty
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) ({{ $fornecedor['telefone'] ?? '' }})
        @switch($fornecedor['ddd'])
            @case ('11')
            São Paulo - (SP)
            @break
            @case ('32')
            Juiz de Fora - (MG)
            @break
            @case ('85')
            Fortaleza - (CE)
            @break
            @default
            Sem DD informado
        @endswitch
        <hr>
        <br>
    @endforeach
@endisset

{{-- FORELSE --}}
{{-- Caso o array não seja vazio, o forelse ira percorrer ele, mas se o array estiver como vazio o forelse ira encaminhar para o empty --}}
@isset($fornecedores)
    <h2>FORELSE</h2>
    @forelse($fornecedores as $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedores: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] }}
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) ({{ $fornecedor['telefone'] ?? '' }})
        @switch($fornecedor['ddd'])
            @case ('11')
            São Paulo - (SP)
            @break
            @case ('32')
            Juiz de Fora - (MG)
            @break
            @case ('85')
            Fortaleza - (CE)
            @break
            @default
            Sem DD informado
        @endswitch
        @if($loop->first)
            <br>Primeira iteração do loop
        @endif
        @if($loop->last)
            <br>Ultima iteração do loop
            <br>
            Total de Registros {{ $loop->count }}
        @endif
        <hr>
        <br>
        @empty
            Não existem fornecedores cadastrados
    @endforelse
@endisset

{{--
    TAG DE ESCAPE
    @
    @{{}}
    ao digitar o @ nós estamos falando que não será interpretado pela sintaxe do blade
--}}
