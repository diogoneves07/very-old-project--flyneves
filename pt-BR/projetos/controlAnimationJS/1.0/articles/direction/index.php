<article class="important-content-section">
    <header>
        <h1>
            Propriedade direction
        </h1>
    </header>
        <p>
        Define a ordem de leitura dos keyframes, em um ciclo de animação.
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
        Tipo esperado:<strong> string</strong>.
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
            <li><mark>normal:</mark> A leitura dos keyframes acontece de forma crescente: chave inicial para chave final.</li>

            <li><mark>reverse:</mark> A leitura dos keyframes acontece de forma decrescente: chave final para a chave inicial.</li>

            <li><mark>alternate:</mark> A leitura dos keyframes acontece de forma alternada entre <mark>normal</mark> e <mark>reverse</mark>, em cada ciclo e utilizado uma forma diferente de leitura, iniciando da: <mark>normal</mark>.</li>

            <li><mark>alternate-reverse:</mark> A leitura dos keyframes acontece de forma alternada entre <mark>normal</mark> e <mark>reverse</mark>, em cada ciclo e utilizado uma forma diferente de leitura, iniciando da: <mark>reverse</mark>.</li>

            <li><mark>random-keys:</mark> A cada ciclo, uma chave dos keyframes é escolhida aleatoriamente como o valor máximo que a animação deve progredir, e a animação sempre começará a partir da chave <mark> 0 </mark></li>

            <li><mark>random-offset:</mark> Em cada ciclo, um valor de deslocamento entre as chaves dos keyframes é escolhido aleatoriamente como o valor máximo que a animação deve progredir, e a animação sempre iniciará da chave <mark> 0 </mark>.</li>

            <li><mark>fluid-random-keys:</mark> Em cada ciclo, uma chave dos keyframes é escolhida aleatoriamente como o valor máximo que a animação deve progredir, e a animação sempre começará a partir do valor de progressão alcançado pelo ciclo anterior.</li>

            <li><mark>fluid-random-offset:</mark> Em cada ciclo, um valor de deslocamento entre as chaves dos keyframes é escolhido aleatoriamente como o valor máximo que a animação deve progredir, e a animação sempre começará a partir do valor de progressão alcançado pelo ciclo anterior.</li>
        </ul>
        <p>
        O valor padrão é: <mark>normal</mark>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
            myAnimationObject.direction  = "random-keys";
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Suporte a navegadores
            </span>
        </h2>
        <p>Esta propriedade possui a mesma tabela de compatibilidade da biblioteca, ou seja, basta olhar a tabela de suporte da biblioteca.</p>
</article>
