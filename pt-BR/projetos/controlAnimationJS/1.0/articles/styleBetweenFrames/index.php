<article class="important-content-section">
    <header>
        <h1>
            Propriedade styleBetweenFrames
        </h1>
    </header>
        <p>
        Define se as propriedades de estilo de um keyframe devem ser adicionadas desde os keyframes anteriores.

        </p>
        <h2 class="subtitles-main">
            <span>
                Detalhe
            </span>
        </h2>
        <p>
            Esta propriedade é de leitura e gravação.
        </p>
        <p>
        Esta propriedade pertence ao objeto de animação, não ao objeto controlAnimation.
        </p>
        <p class="text-expected-type-of-data">
        Tipo esperado:<strong> boolean</strong>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Descrição
            </span>
        </h2>
        <p>
            Valores aceitos para esta propriedade:
        </p>
        <h3 class="subtitle-marked">
            <span>
                true
            </span>
        </h3>
        <p>
        O valor da propriedade é inserido desde os keyframes anteriores, mesmo que eles não o tenham.        </p>
       
        <h3 class="subtitle-marked">
            <span>
            false
            </span>
        </h3>
        <p>
        O valor da propriedade só é alterado nos keyframes que a contêm.
        </p>
        <p>
            O valor padrão é: <mark>true</mark>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
            myAnimationObject.styleBetweenFrames  = false;
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Suporte a navegadores
            </span>
        </h2>
        <p>Esta propriedade possui a mesma tabela de compatibilidade da biblioteca, ou seja, basta olhar a tabela de suporte da biblioteca.</p>
</article>
