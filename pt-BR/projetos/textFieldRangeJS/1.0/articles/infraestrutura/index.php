<article class="important-content-section">
    <header>
        <h1>
        Infraestrutura
        </h1>
    </header>
    <p>
    Entenda um pouco sobre o que acontece internamente em textFieldRangeJS.
    </p>
    <h2 class="subtitles-main">
        <span>
        Inspiração 
        </span>
    </h2>
    <p>
    A inspiração para o desenvolvimento desta biblioteca veio durante o processo de desenvolvimento de outro projeto, no qual não entraremos em detalhes. Era necessário um certo controle das ações do usuário no campo de texto além de facilitar a sua usabilidade.
    </p>
    <h2 class="subtitles-main">
        <span>
            Estrutura 
        </span>
    </h2>
    <p>
    Ao iniciar e durante o processo de desenvolvimento do código fonte, a modelagem foi baseada no Design Pattern:<a href="https://en.wikipedia.org/wiki/Fa%C3%A7ade" target="_blank"> Facade </a>. Não entraremos em detalhes sobre esses padrões, mas falaremos sobre sua aplicação em nosso código-fonte.
    </p>
        <h3 class="subtitles-main">
        <span>
            Facade
        </span>
    </h3>
    <p>
    A motivação para seu uso foi estruturar um sistema em subsistemas para ajudar a reduzir sua complexidade. Não iremos identificar os elementos, mas está muito claro que a classe Facade é a função <mark> textFieldRange </mark>, pois ela sabe quais classes do subsistema são responsáveis pela chamada e delega as chamadas do cliente aos objetos do subsistema corretamente.
    </p>
    <p>
    A implementação dos padrões de projeto citados acima, proporcionou ao código fonte de nossa biblioteca baixo acoplamento, no qual cada função, objeto ou classe tem uma responsabilidade de modo que não ultrapassam seus limites. Isso torna o código mais legível, possibilitando ao desenvolvedor seu entendimento e caso necessário, ele poderá fazer mudanças que venham agregar em sua utilização.
    </p>
    <h2 class="subtitles-main">
        <span>
            Funcionamento
        </span>
    </h2>
    <p>
    A biblioteca textFieldRangeJS foi desenvolvida para obter dados de campos de texto e realizar ações sobre eles, desde obter a posição do cursor até simular os movimentos do usuário ao pressionar uma tecla.
    </p>
    <p>
    Ao chamar a função textFieldRange, passando o elemento de entrada de texto como argumento, será retornado um objeto contendo diversos métodos e propriedades para obtenção de dados, manipulação e ações no campo de texto.
    </p>
    <p>
    Para evitar a necessidade de sempre chamar o método principal: <mark> textFieldRange (elemento) </mark>, basta adicionar o objeto a uma variável, desta forma você pode usá-lo sempre que necessário ao longo do código:
    </p>
    <div class="code-example">
        <pre><code>
        var myElement = document.getElementById( "textarea" );
        var myElementRange = textFieldRange( element );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
            Fechamento
        </span>
    </h2>
    <p>
    textFieldRangeJS é simples e direto para resolver os problemas encontrados ao lidar com elementos de entrada de texto HTML, com precisão, bom desempenho e recursos úteis.
    </p>
</article>

