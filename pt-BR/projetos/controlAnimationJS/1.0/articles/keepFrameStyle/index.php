<article class="important-content-section">
    <header>
        <h1>
            Propriedade keepFrameStyle
        </h1>
    </header>
        <p>
        Define se deve manter o estilo de cada keyframe.
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
        
        <h4 class="subtitle-marked">
            <span>
            true
            </span>
        </h4>
        <p>
        The style value contained in each keyframe is maintained.
        </p>
        <h4 class="subtitle-marked">
            <span>
                false
            </span>
        </h4>
        <p>
        Imagine que na construção da sua animação foram passados os seguintes keyframes: para inserir o estilo contido em cada um.        </p>
        <div class="code-example">
            <pre><code>
            myAnimationObject[ 0 ] = " top: 0px; <b>left:0</b>";
            myAnimationObject[ 33 ] = " 0; <b>200</b>";
            myAnimationObject[ 66 ] = " 0;";
            myAnimationObject[ 100 ] = " 200; <b>200</b>";
            </code></pre>
        </div>
        <p>
        Observe que no keyframe <mark> 33 </mark>, a propriedade de estilo CSS left alcançará 200, mas no próximo keyframe não há referência a ele. No caso atual, no próximo keyframe, a propriedade à left seria adicionada com o mesmo valor da chave inicial.
        </p>
        <p>
            O valor padrão é: <mark>false</mark>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
            myAnimationObject.keepFrameStyle  = true;
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Suporte a navegadores
            </span>
        </h2>
        <p>Esta propriedade possui a mesma tabela de compatibilidade da biblioteca, ou seja, basta olhar a tabela de suporte da biblioteca.</p>
</article>
