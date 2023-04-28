<article class="important-content-section">
    <header>
        <h1>
            Método removeListenerAll()
        </h1>
    </header>
    <p>
    Remove ouvintes de todas as animações.
    </p>
    <h2 class="subtitles-main">
        <span>
            Detalhe
        </span>
    </h2>
    <p>
    Este método pertence ao objeto controlAnimation.
    </p>
    <h2 class="subtitles-main">
        <span>
            Descrição
        </span>
    </h2>
    <p>
        Este método espera argumentos.
    </p>
    <h3 class="subtitles-main">
        <span>
            Argumentos
        </span>
    </h3>
    <h4 class="subtitle-marked">
        <span>
        listener
        </span>
    </h4>
    <p>
    Abaixo está uma lista de valores aceitos para este argumento:
    </p>
    <ul class="normal-list">
        <li><mark>start:</mark> Dispara quando a animação começa.</li>

        <li><mark>end:</mark> Dispara quando a animação termina.</li>

        <li><mark>iterations:</mark> Dispara quando a interação da animação é concluída.</li>

        <li><mark>changekeys:</mark> Dispara quando o progresso da animação ultrapassa o valor de uma chave de quadro.</li>
    </ul>
    <p>
    Este argumento é obrigatório. Especifica o ouvinte a ser removido dos objetos de animação.
    </p>
    <p class="text-expected-type-of-data">
    Tipo esperado: <strong>string</strong>.
    </p>
    <h4 class="subtitle-marked">
        <span>
        callback
        </span>
    </h4>
    <p class="text-expected-type-of-data">
    Tipo esperado: <strong>function</strong>.
    </p>
    <p>
        Este argumento é obrigatório. Especifica a função a ser chamada.
    </p>
    <h3 class="subtitles-main">
        <span>
            Valor de retorno
        </span>
    </h3>
    <p>
        Nenhum valor é retornado.
    </p>
    <h2 class="subtitles-main">
        <span>
            Syntax
        </span>
    </h2>
    <div class="code-example">
        <pre><code>
        controlAnimation.removeListenerAll( listener, callback );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
            Suporte a navegadores
        </span>
    </h2>
    <p>Este método possui a mesma tabela de compatibilidade da biblioteca, ou seja, basta olhar a tabela de suporte da biblioteca.</p>
</article>

