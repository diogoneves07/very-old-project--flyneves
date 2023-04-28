<article class="important-content-section">
    <header>
        <h1>
            Método setCaret()
        </h1>
    </header>
    <p>
    Define uma nova posição para o caret no campo de texto.
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
            lineOrPosition
        </span>
    </h4>
    <p>
        Este argumento é obrigatório. Específica a linha ou a nova posição do caret.
    </p>

    <h4 class="subtitle-marked">
        <span>
            positionInLine
        </span>
    </h4>
    <p>
        Este argumento é opcional. A nova posição do caret na linha.
    </p>

    <p>
    Se apenas um argumento é passado para este método, será entendido que o valor refere-se à nova posição do caret no campo de texto.
    </p>
  

    <p>
    Se dois argumentos forem passados para este método, será entendido que o primeiro argumento se refere à linha na qual você deseja colocar o caret, e o segundo à posição na linha.
    </p>
    <ul class="normal-list">
        <li>
        Se o valor do segundo argumento for maior que o número de caracteres na linha, o caret será colocado no final da linha.        </li>
        <li>
        Valores negativos para o segundo argumento serão entendidos como a subtração do número de caracteres da linha, pelo valor passado. Ou seja, se passar <mark> -1 </mark>, significa que o caret será posicionado um caractere antes do
              último caractere da linha.
        </li>
        <li>Se você passar para o segundo argumento, o valor <mark> -0.1 </mark>, o caret será posicionado no final da linha.</li>
    </ul>
    

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
            textFieldRange( element ).setCaret( lineOrPosition , positionInLine );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
            Suporte a navegadores
        </span>
    </h2>
    <p>Este método possui a mesma tabela de compatibilidade da biblioteca, ou seja, basta olhar a tabela de suporte da biblioteca.</p>
</article>
