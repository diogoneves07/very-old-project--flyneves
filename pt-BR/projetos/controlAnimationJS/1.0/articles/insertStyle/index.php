<article class="important-content-section">
    <header>
        <h1>
            Propriedade insertStyle
        </h1>
    </header>
        <p>
        Define o modo para inserir o estilo incluído nos keyframes.
        </p>
        <h2 class="subtitles-main">
            <span>
                Detalhe
            </span>
        </h2>
        <p>
            Esta propriedade é de leitura e gravação.
        </p>
        <p class="text-expected-type-of-data">
        Tipo esperado:<strong> string</strong>.
        </p>
        <p>
        Esta propriedade pertence ao objeto de animação, não ao objeto controlAnimation.
        </p>
        <h2 class="subtitles-main">
            <span>
                Descrição
            </span>
        </h2>
        <p>
        Valores aceitos para esta propriedade:
        </p>
        <ul class="normal-list">
            <li><mark>inline:</mark> O estilo é adicionado aos elementos pelo atributo de style HTML.</li>
            <li><mark>tag:</mark> O estilo é adicionado aos elementos pela tag de estilo HTML, por meio da classe CSS, usando o valor da <a href="../className/"> propriedade className </a> como o nome da classe.</li>
            <li><mark>auto:</mark> O estilo por meio da <mark> tag </mark> é adicionado apenas quando há mais de 1 elemento.</li>
        </ul>
        <p>
        O valor padrão é: <mark>auto</mark>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
            myAnimationObject.insertStyle  = "tag";
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Suporte a navegadores
            </span>
        </h2>
        <p>Esta propriedade possui a mesma tabela de compatibilidade da biblioteca, ou seja, basta olhar a tabela de suporte da biblioteca.</p>
</article>
