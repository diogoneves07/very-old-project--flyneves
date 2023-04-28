<article class="important-content-section">
    <header>
        <h1>
            Método size()
        </h1>
    </header>
    <p>
        Simula a entrada de uma sequência de caracteres no campo de texto.
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
            string
        </span>
    </h4>
    <p>
        Este argumento é obrigatório. Especifica a sequência de caracteres a ser usada pelo método.
    </p>
    <h4 class="subtitle-marked">
        <span>
            noRemove
        </span>
    </h4>
    <p>
        Este argumento é opcional.
    </p>
    <p>
    O método clonará o elemento do campo de texto para obter os valores das propriedades, ou seja, inserirá elementos no documento e quando não forem mais necessários, os removerá. O uso desse método em uma estrutura repetitiva exige muito do navegador.
    </p>
    <p>
        Este argumento pode ser usado para evitar que o processo fique lento passando <mark> true </mark>.
</p>
    <h5 class="subtitles-main">
        <span>
            Exemplo
        </span>
    </h5>
    <div class="code-example">
        <pre><code>
        textFieldRange( element ).size( string, true );
        </code></pre>
    </div>
    <p>Quando não for mais necessário preservar os elementos inseridos pelo método, basta chamá-lo novamente, passando apenas <mark> false </mark>.</p>

    <h5 class="subtitles-main">
        <span>
            Exemplo
        </span>
    </h5>
    <div class="code-example">
        <pre><code>
        textFieldRange( element ).size( false );
        </code></pre>
    </div>
    <h3 class="subtitles-main">
        <span>
            Valor de retorno
        </span>
    </h3>
    <p>
        O valor retornado é um objeto.
    </p>

    <h3 class="subtitles-main">
        <span>
            Propriedades do objeto:
        </span>
    </h3>
    <h4 class="subtitle-marked">
        <span>
            height
        </span>
    </h4>
    <p>
        Retorna a altura em px da sequência de caracteres.
    </p>
    <h4 class="subtitle-marked">
        <span>
            width
        </span>
    </h4>
    <p>
        Retorna a largura em px da sequência de caracteres.
    </p>
    <h4 class="subtitle-marked">
        <span>
            charHeight
        </span>
    </h4>
    <p>
        Retorna a altura atual em px dos caracteres da sequência de caracteres.
    </p>
    <h4 class="subtitle-marked">
        <span>
            lineHeight
        </span>
    </h4>
    <p>
        Retorna a altura em px das linhas contidas no sequência de caracteres.
    </p>
    <h2 class="subtitles-main">
        <span>
            Syntax
        </span>
    </h2>
    <div class="code-example">
        <pre><code>
        textFieldRange( element ).size( "string" );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
            Suporte a navegadores
        </span>
    </h2>
    <p>Este método possui a mesma tabela de compatibilidade da biblioteca, ou seja, basta olhar a tabela de suporte da biblioteca.</p>
</article>
