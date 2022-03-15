{{ $slot }} {{-- recebendo parâmetro da view dentro de @components--}}
<form action="{{ route('site.contato') }}" method="post">
    @csrf {{-- formulários enviado via post, é necessário ter um token para garantir que o famulário está sendo enviado com o método post --}}
    <input name="nome" type="text" placeholder="Nome" class="{{ $cor_borda }}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{ $cor_borda }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{ $cor_borda }}">
    <br>
    <select name="motivo_contato" class="{{ $cor_borda }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $cor_borda }}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $cor_borda }}">ENVIAR</button>
</form>
