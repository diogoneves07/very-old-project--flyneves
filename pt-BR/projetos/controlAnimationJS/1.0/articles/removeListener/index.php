<article class="important-content-section">
    <header>
        <h1>
        Método removeListener()
        </h1>
    </header>
    <p>
    Remove ouvintes da animação.
    </p>
    <h2 class="subtitles-main">
        <span>
        Detalhe
        </span>
    </h2>
    <p>
    Esse método pertence ao objeto de animação.
    </p>
    <h2 class="subtitles-main">
        <span>
        Descrição
        </span>
    </h2>
    
    <p>
    Esse método espera argumentos.
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
    Abaixo está uma lista de valores aceitos para este argumento:    </p>
    <ul class="normal-list">
        <li><mark>start:</mark> Dispara quando a animação começa.</li>

        <li><mark>end:</mark> Dispara quando a animação for concluída.</li>

        <li><mark>iterations:</mark> Dispara quando a interação da animação é concluída.</li>

        <li><mark>changekeys:</mark> Dispara quando o progresso da animação excede o valor de uma chave de quadro.</li>
    </ul>
    <p>
    Este argumento é obrigatório. Especifica o evento a ser removido do objeto de animação.
    </p>
    <p class="text-expected-type-of-data">
    Tipo esperado: <strong>string</strong>.
    </p>
    <h4 class="subtitle-marked">
        <span>
        callback
        </span>
    </h4>
    <p>
        Este argumento é obrigatório. Especifica a função a ser chamado.
    </p>
    <p class="text-expected-type-of-data">
    Tipo esperado: <strong>function</strong>.
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
            myAnimationObject.removeListener( listener, callback );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
        Suporte a navegadores
        </span>
    </h2>
    <p>Esta propriedade possui a mesma tabela de compatibilidade da biblioteca, ou seja, basta olhar a tabela de suporte da biblioteca.</p>
</article>

