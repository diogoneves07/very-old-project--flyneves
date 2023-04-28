<article class="important-content-section">
<header>
    <h1>
    Começando a usar
    </h1>
</header>
    <p>
    Veja um exemplo simples de uso de controlAnimation.
    </p>

    <h2 class="subtitles-main">
        <span>
            Instalando
        </span>
    </h2>
    <p>
    Para iniciar o tutorial os primeiros passos são: baixar a biblioteca, depois criar um arquivo HTML, neste arquivo adicionaremos o link para controlAnimationJS, também criaremos um arquivo JavaScript com o nome: myAnimation.js, e adicionaremos o link, será onde faremos as manipulações. Vamos inserir os elementos necessários e algum CSS. Veja o exemplo abaixo:
    </p>
    <div class="code-example">
        <pre><code>
            &lt;!DOCTYPE html&gt;
                &lt;html&gt;
                    &lt;head&gt;
                        &lt;meta charset="utf-8"&gt;
                        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                        &lt;title&gt;controlAnimationJS&lt;/title&gt;
                        &lt;style&gt;
                            #controlAnimation-rectangle{
                                float: left;
                                width: 90%;
                                margin: 0 5%;
                                padding: 40px 0;
                                overflow: hidden;
                                height: 200px;
                            }
                            #controlAnimation-rectangle div{
                                float: left;
                                width: 700px;
                                height: 100px;
                            }
                            #controlAnimation-bars span{
                                display: inline-block;
                                width: 30px;
                                height: 10px;
                                position: relative;
                                margin: 40px;
                                z-index: 9;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div id="controlAnimation-rectangle"&gt;
                            &lt;div&gt;
                                &lt;div id="controlAnimation-bars"&gt;
                                    &lt;span&gt;&lt;/span&gt;
                                    &lt;span&gt;&lt;/span&gt;
                                    &lt;span&gt;&lt;/span&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;script src="controlAnimation.js"&gt;&lt;/script&gt;
                        &lt;script src="myAnimation.js"&gt;&lt;/script&gt;
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
    O exemplo escolhido para este tutorial, será um exemplo muito simples. Servirá apenas para observar como é fácil trabalhar com controlAnimation.
    </p>
    <p>
    Usaremos elementos estilizados em forma de barras e faremos com que se movam aleatoriamente.
    </p>
    <h3 class="subtitles-main">
        <span>
        Código
        </span>
    </h3>
    <p>
    O código abaixo deve ser inserido no arquivo myAnimation.js.
    </p>
    <div class="code-example">
        <pre><code>
        var elementsBars = document.getElementById( "controlAnimation-bars" ).getElementsByTagName( "span" );
        var myAnimation = controlAnimation.create();
        myAnimation.direction = "fluid-random-offset";
        myAnimation.iterations = Infinity;

        myAnimation[ 0 ] = "height:100px; top: 0px; left: 0px; background-color: rgb( 255, 0, 0 ); border-radius:0px; transform: rotate( 0deg );";
        myAnimation[ 100 ] = "300; 50; 100; rgb( 0, 0, 255 ); 20; rotate( 360deg );";

        controlAnimation.play( myAnimation.clone( elementBars ) );
        </code></pre>
    </div>
    <h3 class="subtitles-main">
        <span>
        Executando  
        </span>
    </h3>
    <p>
    Se você não está vendo a animação corretamente: se possível, tente usar o dispositivo horizontalmente.
    </p>
    <div id="controlAnimation-rectangle">
        <div>
            <div id="controlAnimation-bars">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</article>

