<article class="important-content-section">
<header>
    <h1>
        Começando a usar
    </h1>
</header>
    <p>
    Aprenda os conhecimentos básicos sobre a biblioteca e veja um exemplo simples de seu uso.
    </p>

    <h2 class="subtitles-main">
        <span>
            Instalando
        </span>
    </h2>
    <p>
    Para iniciar o tutorial os primeiros passos são: baixar a biblioteca, criar um arquivo HTML, neste arquivo adicionaremos a biblioteca textFieldRangeJS. Vamos criar um arquivo JavaScript com o nome: textFieldHandler.js e adicioná-lo ao nosso HTML e também inserir os elementos necessários:
    </p>
    <div class="code-example">
        <pre><code>
        &lt;!DOCTYPE html&gt;
            &lt;html&gt;
                &lt;head&gt;
                    &lt;meta charset="utf-8"&gt;
                    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                    &lt;title&gt;textFieldRangeJS&lt;/title&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    &lt;textarea id="textField" &gt;&lt;/textarea&gt;
                    &lt;script src="textFieldRange.js"&gt;&lt;/script&gt;
                &lt;/body&gt;
            &lt;/html&gt;
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
        O que faremos?
        </span>
    </h2>
    <p>
    O exemplo escolhido para este tutorial será um exemplo muito simples. Servirá apenas para observar a velocidade e precisão da biblioteca.
    </p>
    <p>
    Vamos definir a posição do caret no campo de texto, simulando os movimentos das teclas.
    </p>
    <h3 class="subtitles-main">
        <span>
        Código
        </span>
    </h3>
    <p>
    O código abaixo deve ser inserido no arquivo textFieldHandler.js:
    </p>
    <div class="code-example">
        <pre><code>
        var myElement = document.getElementById( "textField" );
        textFieldRange( myElement ).moveCaret( caretPosition );
        </code></pre>
    </div>
    <h3 class="subtitles-main">
        <span>
        Executando  
        </span>
    </h3>
    <p>
    Abaixo está o exemplo em execução, obviamente ligeiramente melhorado:   </p>
    <form action="" class="textFieldRange-tutorial">
    <textarea id="myTextField" spellcheck="false" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam impedit accusantium repudiandae? Velit consequuntur illo aut, laudantium eligendi nesciunt odio consectetur porro et laborum pariatur nostrum sunt, officiis, natus cum!</textarea>
    <div>
        <button type="button" >37 - ArrowLeft</button>
        <button type="button" >38 - ArrowUp</button>
        <button type="button" >39 - ArrowRight</button>
        <button type="button" >40 - ArrowDown</button>
    </div>
    <div>
        <button type="button" >35 - End</button>
        <button type="button" >36 - Home</button>
    </div>
    <div>
        <button type="button" >33 - PageUp</button>
        <button type="button" >34 - PageDown</button>
    </div>
    </form>
</article>

