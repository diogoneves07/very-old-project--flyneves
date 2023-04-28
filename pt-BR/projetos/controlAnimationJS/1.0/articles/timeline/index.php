<article class="important-content-section">
    <header>
        <h1>
            Propriedade timeline
        </h1>
    </header>
        <p>
            O cronograma da animação.
        </p>
        <h2 class="subtitles-main">
            <span>
                Detalhe
            </span>
        </h2>
        <p>
        Esta é uma propriedade somente leitura, ou seja, seu valor não deve ser alterado.
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
            O valor contido é um objeto.
        </p>
        <h3 class="subtitles-main">
        <span>
            Propriedades do objeto
        </span>
        </h3>
        <p>
        As propriedades abaixo contêm uma lista de chaves que informa como ocorrerá a atenuação da animação. Se você passar o estilo para as chaves dos quadros-chave, as chaves da lista terão como valor o estilo que será aplicado quando o andamento da animação for igual ao da chave.
        </p>
        <h4 class="subtitle-marked">
            <span>
                normal
            </span>
        </h4>
        <p>
        O cronograma da animação para quando a leitura dos keyframes acontece de forma crescente: chave inicial para a chave final.
        </p>
        <h4 class="subtitle-marked">
            <span>
                reverse
            </span>
        </h4>
        <p>
        O cronograma da animação para quando a leitura dos keyframes acontece de forma decrescente: chave final para a chave inicial.
        </p>
        <h2 class="subtitles-main">
            <span>
                Direções 
            </span>
        </h2>
        <p>
            O cronograma da animação é definido de acordo a direção da mesma. A lista abaixo informa qual cronograma será escolhido de acordo com a direção.
        </p>
        <ul class="normal-list">
            <li><mark>normal:</mark> O cronograma escolhido é o: <mark>normal</mark>.</li>

            <li><mark>reverse:</mark> O cronograma escolhido é o: <mark>reverse</mark>.</li>

            <li><mark>alternate:</mark>Alternara os cronogramas.</li>

            <li><mark>alternate-reverse:</mark> Alternara os cronogramas.</li>

            <li><mark>random-keys:</mark> O cronograma escolhido será sempre o: <mark>normal</mark></li>

            <li><mark>random-offset:</mark> O cronograma escolhido será sempre o: <mark>normal</mark></li>

            <li><mark>fluid-random-keys:</mark> O cronograma escolhido será sempre o: <mark>normal</mark></li>

            <li><mark>fluid-random-offset:</mark> O cronograma escolhido será sempre o: <mark>normal</mark></li>
        </ul>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
                var animationTimeline =  myAnimationObject.timeline;
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Suporte a navegadores
            </span>
        </h2>
        <p>Esta propriedade possui a mesma tabela de compatibilidade da biblioteca, ou seja, basta olhar a tabela de suporte da biblioteca.</p>
</article>
