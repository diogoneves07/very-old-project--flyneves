<article class="important-content-section">
    <header>
        <h1>
            Propriedade easing
        </h1>
    </header>
        <p>
        Define como a animação irá progredir durante sua execução.
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
        Tipo esperado:<strong> function</strong>.
        </p>
        
        <h2 class="subtitles-main">
            <span>
                Descrição
            </span>
        </h2>
        <p>
        A função a ser definida para esta propriedade, deve ser uma das <a href="http://www.gizma.com/easing/" target="_blank"> funções de easing </a>. Existem vários sites e projetos que apresentam e distribuem essas funções matemáticas.
        </p>
        <p>
        O valor padrão é:
        </p>
        <div class="code-example">
            <pre><code>
            function linearTween( t, b, c, d ) {
                return c * t / d + b;
            };
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
            myAnimationObject.easing  = function easeInOutQuad( t, b, c, d ) {
                t /= d / 2;
                if ( t < 1 ) return c / 2 * t * t + b;
                t--;
                return -c / 2 * ( t * ( t -2 ) - 1 ) + b;
            };
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Suporte a navegadores
            </span>
        </h2>
        <p>Esta propriedade possui a mesma tabela de compatibilidade da biblioteca, ou seja, basta olhar a tabela de suporte da biblioteca.</p>
</article>
