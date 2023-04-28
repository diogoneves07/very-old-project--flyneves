<article class="important-content-section">
<header>
    <h1>
    Introdução
    </h1>
</header>
    <p>
    Desenvolvida para desenvolvedores criativos que não abrem mão do alto desempenho, oferecendo total controle sobre suas animações.
    </p>
    <h2 class="subtitles-main">
        <span>
        “Cópia original”
        </span>
    </h2>
    <p>
    Inspirado no modelo CSS para a criação de animações com  <a href="https://developer.mozilla.org/pt-BR/docs/Web/CSS/@keyframes" target="_blank" >@keyframes</a>, a linha de aprendizado para usar esta biblioteca encurta consideravelmente. Mesmo que você não leia a documentação, dificilmente se perderá ao usá-la, com recursos, propriedades e métodos semelhantes e com a mesma estrutura de @keyframes, a codificação será sempre elegante e familiar.
    </p>
    <p>
    O principal ponto positivo desta biblioteca são as inúmeras possibilidades de criação de animações, simplicidade, elegância, e sua capacidade de trabalhar com diferentes e antigos navegadores, oferecendo entre eles excelente qualidade.
    </p>
    <h2 class="subtitles-main">
        <span>
        controlAnimationJS vs CSS Animations
        </span>
    </h2>
    <p>
    <a href="https://www.w3schools.com/css/css3_animations.asp" target="_blank" >CSS Animations</a> adicionou recursos incríveis, porém, não oferece controle completo, reação às ações do usuário, obtenção de dados sobre o estado atual da animação e se você deseja suportar um navegador antigo, não estará disponível. A biblioteca controlAnimationJS atende a essas necessidades, trazendo funcionalidades semelhantes e adicionando novas, a codificação é mais simples e completa, pois com menos código você fará o mesmo, mas suportará todos os navegadores.</p>
    <h3 class="subtitles-main">
        <span>
        Comparando a codificação 
        </span>
    </h3>
    <p>
    Os exemplos abaixo são para comparação, neles estaríamos criando a mesma animação com controlAnimationJS e CSS Animations, visualmente você verá a diferença na codificação necessária.</p>
    <h4 class="subtitles-main">
        <span>
        código controlAnimationJS
        </span>
    </h4>
    <div class="code-example">
        <pre><code>
        var myAnimation = {};
        myAnimation.element = myElement;
        myAnimation[ 0 ] = "transform: rotate( 0deg )";
        myAnimation[ 100 ] = "rotate( 360deg )";
        myAnimation.iterations = Infinity;
        myAnimation.duration = 2;
        controlAnimation.play( myAnimation );
        </code></pre>
    </div>
    <h4 class="subtitles-main">
        <span>
        Código de animações CSS
        </span>
    </h4>
    <div class="code-example">
        <pre><code>
        @keyframes myAnimation {
                0% {
                    transform: rotate( 0deg )
                }
                100% {
                    transform: rotate( 360deg )
                }
        }
        @-webkit-keyframes myAnimation {
                0% {
                    transform: rotate( 0deg )
                }
                100% {
                    transform: rotate( 360deg )
                }
        }
        @-moz-keyframes myAnimation {
                0% {
                    transform: rotate( 0deg )
                }
                100% {
                    transform: rotate( 360deg )
                }
        }
        .myAnimation-element {
                -webkit-animation:  myAnimation 2s infinite;
                -moz-animation:  myAnimation 2s infinite;
                animation:  myAnimation 2s infinite;
        }
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
        Fechamento
        </span>
    </h2>
    <p>
        Extremamente leve, poderosa, com muitos recursos e funcionalidades, controlAnimationJS é a biblioteca que muitos desenvolvedores estavam procurando.
    </p>
    <h2 class="subtitles-main">
        <span>
        Leia mais 
        </span>
    </h2>
    <p>
    Leia a <a href="documentacao/"> documentação da biblioteca </a>, é simples e fácil de aprender.
    </p>
</article>

