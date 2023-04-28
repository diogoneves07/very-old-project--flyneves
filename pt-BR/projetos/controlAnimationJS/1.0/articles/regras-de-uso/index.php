<article class="important-content-section">
    <header>
        <h1>
            Regras de uso
        </h1>
    </header>
        <p>
        Conheça e compreenda as regras de uso da biblioteca controlAnimation.
        </p>
        <p>
        A lista abaixo descreve alguns cuidados a serem tomados ao usar controlAnimation.
        </p>
        <p>– Ao criar uma animação usando o estilo nos keyframes, você deve sempre definir os valores iniciais de todas as propriedades que usará na chave <mark>0</mark>.
        </p>
        <p>– Ao criar uma animação utilizando o estilo nos keyframes, lembre-se de que não há conversão dos valores das propriedades, ou seja, a unidade de medida inicial é sempre mantida.
        </p>
        <p>– Ao criar uma animação utilizando o estilo nos keyframes, com a intenção de utilizar propriedades CSS que recebem valores relacionados às cores, só é permitido utilizar cores em RGB, RGBA e HEXADECIMAL.</p>

        <p> – Ao criar uma animação usando o estilo nos keyframes, lembre-se de que a biblioteca não faz a transição de valores não numéricos para numéricos, ou seja, se uma determinada propriedade CSS na chave 0 tiver o valor: centro e a próxima chave: 200px. Nada vai acontecer, porque a biblioteca não faz essa transição.</p>

        <p>– Ao criar uma animação usando estilo nos quadros-chave,  e caso queira que uma propriedade aceite valores flutuantes é necessário que na chave <mark>0</mark>, no valor da propriedade insira um <mark> . </mark>, veja o exemplo abaixo:</p>
        <div class="code-example">
            <pre><code>
                myAnimationObject[ 0 ] = " top: 0<b>.</b>px";
            </code></pre>
        </div>
        <p>
        Obviamente, se a propriedade já vai receber um valor flutuante na chave <mark> 0 </mark>, não há necessidade de inserir o <mark>. </mark>.
        </p>
</article>

