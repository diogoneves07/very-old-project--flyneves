<article class="important-content-section">
    <header>
        <h1>
            Propriedade maxProgress
        </h1>
    </header>
        <p>
        Define o progresso máximo que a interação da animação pode alcançar.
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
        Tipo esperado:<strong> number || object</strong>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Descrição
            </span>
        </h2>
        <p>
        Você também pode definir o valor da propriedade como uma matriz:
        </p>
        <div class="code-example">
            <pre><code>
            myAnimationObject.maxProgress = [ 40, 70 , 90];
            </code></pre>
        </div>
        <p>
        No exemplo acima, na primeira interação, o progresso da animação iria até <mark> 40 </mark>, e no segundo até <mark> 70 </mark> e assim por diante.
        </p>
        <p>
        Quando o valor da sequência de interação é maior do que o número de valores na matriz, você pode começar de novo:
        </p>
        <div class="code-example">
            <pre><code>
            myAnimationObject.maxProgress = [ 40, 70 , "restart"];
            </code></pre>
        </div>
        <p>
        Definir a string: <mark> "restart" </mark> como o último valor do array fará com que a contagem dos valores do array comece novamente.
            </p>
        <p>
        Se não houver nenhum valor na matriz na posição indicada pelo número de interações concluídas, <mark> maxProgress </mark> retornará ao seu comportamento normal de acordo com a <a href="../direction/"> propriedade direction </a>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
            myAnimationObject.maxProgress = 100;
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Suporte a navegadores
            </span>
        </h2>
        <p>Esta propriedade possui a mesma tabela de compatibilidade da biblioteca, ou seja, basta olhar a tabela de suporte da biblioteca.</p>
</article>
