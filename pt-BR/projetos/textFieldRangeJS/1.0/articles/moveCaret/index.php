<article class="important-content-section">
    <header>
        <h1>
            Método moveCaret()
        </h1>
    </header>
    <p>
    Mova o caret no campo de texto.
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
    <div>
        <h4 class="subtitle-marked">
            <span>
                keyCode
            </span>
        </h4>
        <p>
            Este argumento é obrigatório.
        </p>
        <h5 class="subtitles-main">
            <span>
            Valores permitidos
            </span>
        </h5>
        <ul class="normal-list">
            <li><mark>33:</mark> Posicione o caret em uma linha uma página acima da linha que está posicionado no momento.</li>
            <li><mark>34:</mark> Posicione o caret em uma linha uma página abaixo da linha atualmente posicionado.</li>
            <li><mark>35:</mark> Posicione o caret no último caractere da linha que está atualmente posicionado.</li>
            <li><mark>36:</mark> Posicione o caret no primeiro caractere da linha atualmente posicionado.</li>
            
            <li><mark>37:</mark> Posicione o caret antes do primeiro caractere à esquerda de sua posição atual.</li>


            <li><mark>38:</mark> Posicione o caret uma linha acima de sua posição atual.</li>


            <li><mark>39:</mark> Posicione o caret após o primeiro caractere à direita de sua posição atual.</li>


            <li><mark>40:</mark> Posicione o caret uma linha abaixo de sua posição atual.</li>
        </ul>
        <p>Nos casos em que não há mais linhas para o caret mover, se você passar o keyCode que sua ação se refere ao mover entre as linhas: 
        </p>
        <ul class="normal-list">
            <li>Não há mais linhas para cima, mas o keyCode passado foi: <mark> 33 </mark> ou <mark> 38 </mark>, o caret será posicionado no primeiro caractere da linha, que está posicionado no momento.</li>
            <li>Não há mais linhas para baixo, mas o keyCode passado foi: <mark> 34 </mark> ou <mark> 40 </mark>, o caret será posicionado no último caractere da linha, que está posicionado no momento.</li>
        </ul>
    </div>
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
            textFieldRange( element ).moveCaret( keyCode );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
            Suporte a navegadores
        </span>
    </h2>
    <p>Este método possui a mesma tabela de compatibilidade da biblioteca, ou seja, basta olhar a tabela de suporte da biblioteca.</p>
</article>
