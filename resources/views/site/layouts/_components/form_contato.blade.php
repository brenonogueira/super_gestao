
{{ $slot }}

<form action={{ route('site.contato') }} method="post">

    {{-- ********** input do token ********** --}}
    @csrf

    {{-- ********** input nome ********** --}}
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    @if ($errors->has('nome'))  {{-- has() verifica se tem erro --}}
        {{ $errors->first('nome') }} {{-- first() pega o primeiro erro da validação --}}
    @endif

    <br>
    {{-- ********** input telefone ********** --}}
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone"
        class="{{ $classe }}">
    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}  {{-- has() verifica se tem erro --}} {{-- first() pega o primeiro erro da validação --}}

    <br>
    {{-- ********** input email ********** --}}
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    {{ $errors->has('email') ? $errors->first('email') : '' }}  {{-- has() verifica se tem erro --}} {{-- first() pega o primeiro erro da validação --}}

    <br>
    {{-- ********** input motivo contato ********** --}}
    <select name="motivo_contato_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{ $motivo_contato->id }}"
                {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>
                {{ $motivo_contato->motivo_contato }}</option>
        @endforeach
    </select>

    {{ $errors->has('motivo_contato_id') ? $errors->first('motivo_contato_id') : '' }}  {{-- has() verifica se tem erro --}} {{-- first() pega o primeiro erro da validação --}}
    <br>

    {{-- ********** input mensagem ********** --}}
    <textarea name="mensagem"
        class="{{ $classe }}">{{ old('mensagem') != '' ? old('mensagem') : 'Preencha aqui a sua mensagem' }}</textarea>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }} {{-- has() verifica se tem erro --}} {{-- first() pega o primeiro erro da validação --}}

    <br>
    {{-- ********** button ********** --}}
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

@if ($errors->any())
    <div style="position:absolute; top:0px; left:0px; width:100%; background:red">

        @foreach ($errors->all() as $erro)
            {{ $erro }}
            <br>
        @endforeach

    </div>
@endif
