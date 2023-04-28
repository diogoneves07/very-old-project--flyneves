<article class="important-content-section">
    <header>
        <h1>
        Introdução
        </h1>
    </header>
    <p>
    Unifica as propriedades e métodos de objetos de intervalo de texto: (<a href = "https://developer.mozilla.org/pt-BR/docs/Web/API/Sele%C3%A7%C3%A3o" target = "_blank "> Selection </a> e <a href = "https://docs.microsoft.com/en-us/previous-versions/windows/internet-explorer/ie-developer/platform-apis/aa741670(v%3Dvs.85)" target = "_ blank "> createTextRange() </a>), implementando recursos fantásticos e tornando-o extremamente simples de usar.
    </p>
    <h2 class="subtitles-main">
        <span>
            Um breve olhar
        </span>
    </h2>
    <p>
    Dois de seus incríveis recursos são descritos resumidamente a seguir:
    </p>
    <h3 class="subtitles-main">
        <span>
            Movimentando o caret
        </span>
    </h3>
    <p>
    Mova o caret no campo de texto da mesma forma que quando o usuário pressiona as teclas de seta.
    </p>
    <p>Esta tarefa é extremamente simples, obtendo o objeto textFieldRange do elemento, e utilizando o <a href="documentacao/moveCaret/"> método moveCaret() </a>, com uma linha de comando seria resolvido:</p>

    <p></p>
    <div class="code-example">
        <pre><code>
            textFieldRange( element ).moveCaret( keyCode );
        </code></pre>
    </div>
    <p>
    Talvez você tenha ficado um pouco confuso com o código, pois não havia explicação, não se preocupe, é apenas uma degustação, leia mais sobre o objeto retornado de textFieldRange e o <a href="documentacao/moveCaret/"> método moveCaret </a> na documentação da biblioteca.
    </p>

    <p></p>
    <h3 class="subtitles-main">
        <span>
        Obter a posição do caret
        </span>
    </h3>
    <p>
    Ao obter o objeto textFieldRange do elemento, você verá algumas propriedades sobre a posição atual do caret no campo de texto. No código abaixo estaríamos usando a <a href="documentacao/top/"> propriedade top </a>.
    </p>
    <div class="code-example">
        <pre><code>
            var caretPosition = textFieldRange( element ).top;
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
        Leia mais 
        </span>
    </h2>
    <p>
    Leia a <a href="documentacao/"> documentação da biblioteca </a>, é simples e fácil de aprender.    
    </p>
</article>

