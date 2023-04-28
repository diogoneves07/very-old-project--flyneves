<article class="important-content-section">
    <header>
        <h1>
            Método select()
        </h1>
    </header>
    <p>
        Seleciona uma sequência de caracteres no campo de texto.
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
            selectionStart
        </span>
    </h4>
    <p>
        Este argumento é opcional. Especifica a posição do primeiro caractere para iniciar a seleção.
    </p>

    <h4 class="subtitle-marked">
        <span>
            selectionEnd
        </span>
    </h4>
    <p>
        Este argumento é opcional. Especifica a posição do último caractere do final da seleção.
    </p>

    <p>
    Se o argumento <strong>selectionEnd</strong> não for passado, o método colocará o cursor na posição passada para o argumento <strong>selectionStart</strong>.
    </p>

    <p>
    Se nenhum argumento for passado, o método selecionará todo o texto do campo de texto.
    </p>
    <h3 class="subtitles-main">
        <span>
            Valor de retorno
        </span>
    </h3>
    <p>
        O valor retornado é o objeto textFieldRange atualizado.
    </p>
    <h2 class="subtitles-main">
        <span>
            Syntax
        </span>
    </h2>
    <div class="code-example">
        <pre><code>
            textFieldRange( element ).select( selectionStart, selectionEnd );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
            Suporte a navegadores
        </span>
    </h2>
    <p>Este método possui a mesma tabela de compatibilidade da biblioteca, ou seja, basta olhar a tabela de suporte da biblioteca.</p>
</article>
