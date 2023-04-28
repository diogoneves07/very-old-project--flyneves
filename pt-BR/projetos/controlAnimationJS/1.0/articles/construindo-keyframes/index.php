<article class="important-content-section">
    <header>
        <h1>
        Construindo keyframes
        </h1>
    </header>
    <p>
    Compreenda o funcionamento e as regras de uso para a construção dos keyframes da animação.
    </p>
    <h2 class="subtitles-main">
        <span>
        Detalhe
        </span>
    </h2>
    <p>
        Propriedades keyframes são de leitura e gravação.
    </p>
    <p>
        Propriedades keyframes pertence ao objeto da animação, e não ao objeto controlAnimation.
    </p>
    <p class="text-expected-type-of-data">Tipo esperado:<strong> object || boolean || string </strong>.</p>
    <h2 class="subtitles-main">
        <span>
            Descrição
        </span>
    </h2>
    <p>
    Os keyframes são os momentos mais importantes de uma animação. Como o nome já diz, são a “chave” de todos os frames de uma animação, são responsáveis por criar o tempo e o ritmo corretos do movimento, por exemplo: apresentam diferenças nas ações de um personagem, uma mudança crucial no movimento ou mesmo uma ótima pose.
    </p>
    <h3 class="subtitles-main">
        <span>
        Valores aceitos
        </span>
    </h3>
    <p>
    Compreenda os valores aceitos para cada keyframe e como usá-los.
    </p>
    <h4 class="subtitle-marked">
        <span>
        styleObject
        </span>
    </h4>
    <p>
    Defina um objeto com propriedades CSS, com nomenclatura JavaScript e o estilo CSS será aplicado aos elementos durante a animação. Veja o exemplo abaixo:
    </p>
    <div class="code-example">
        <pre><code>
            myAnimationObject[ 0 ] = { 
                borderWidth: "0px",  
                top: "0px",  
                left: "0px", 
            }
        </code></pre>
    </div>
    <p>
    Nas chaves após a chave <mark>0</mark>, você pode minimizar os nomes das propriedades e seus valores.
    </p>
    <div class="code-example">
        <pre><code>
            myAnimationObject[ 0 ] = { 
                borderWidth: "0px",  
                top: "0px",  
                left: "0px"
            }
            myAnimationObject[ 100 ] = { 
                0: "10",    <span class="code-comment"> /* borderWidth: 10px */</span>
                1: "10"     <span class="code-comment"> /* top: 10px */</span>,  
                2: "10"     <span class="code-comment"> /* left: 10px */</span>
            }
        </code></pre>
    </div>
    <h4 class="subtitle-marked">
        <span>
            boolean
        </span>
    </h4>
    <p>
    Nenhuma ação é definida, mas a animação é executada e as propriedades do objeto de animação recebem atualizações.
    </p>
    
    <h4 class="subtitle-marked">
        <span>
            string
        </span>
    </h4>
    <p>
    Defina uma string de caracteres e ela será entendida como um estilo CSS e aplicada aos elementos durante a animação.
    </p>
    <p>
    Você também pode minimizar os nomes das propriedades, veja o exemplo abaixo:
    </p>
    <div class="code-example">
        <pre><code>
            <span class="code-comment">/* Quando a sequência das propriedades não é alterada. */</span>
            myAnimationObject[ 0 ] = " border-width: 0px; top: 0px; left: 0px ";
            myAnimationObject[ 100 ] = "10; 200; 200;" <span class="code-comment">/* O mesmo que: "border-width: 10px; top: 200px; left: 200px"*/</span>;
            <span class="code-comment">/* ___________________________________________________*/</span>

            <span class="code-comment">/* Quando a sequência das propriedades é alterada. */</span>
            myAnimationObject[ 0 ] = " border-width: 0px; top: 0px; left: 0px ";
            myAnimationObject[ 100 ] = "1: 10; 2: 200; 0: 200;" <span class="code-comment">/* O mesmo que: "top: 10px; left: 200px; border-width: 200px"*/</span>;
            <span class="code-comment">/* ___________________________________________________*/</span>
        </code></pre>
    </div>
   <p>
   Da maneira como você inicia os valores de uma propriedade, você deve segui-los em todos os quadros-chave, exemplo: <mark> border-width: 1px 2px 3px 4px </mark>, a sequência de valores relacionados a border, deve ser mantida conforme foram iniciados.
    </p>
    <h2 class="subtitles-main">
        <span>
            Syntax
        </span>
    </h2>
    <div class="code-example">
        <pre><code>
            myAnimationObject[ 0 ] = " top: 0px; left: 50px;...";
        </code></pre>
    </div>
</article>
