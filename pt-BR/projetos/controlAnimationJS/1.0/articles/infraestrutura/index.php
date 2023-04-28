<article class="important-content-section">
    <header>
        <h1>
        Infraestrutura 
        </h1>
    </header>
    <p>
    Entenda um pouco sobre o que acontece internamente em controlAnimation.
    </p>
    <h2 class="subtitles-main">
        <span>
        Inspiração  
        </span>
    </h2>
    <p>
        Atualmente existem diversas bibliotecas JavaScript, (incríveis e poderosas), destinadas a construção de animações. Entretanto, acredito que em algum momento você também já tenha se feito os seguintes questionamentos: “Vale a pena usar uma biblioteca tão pesada na minha aplicação?” ou “Estou me tornando um desenvolvedor preguiçoso e não-criativo ao usar lógicas de animações prontas?”.
        Com a chegada da <a  href="https://www.w3schools.com/css/css3_animations.asp" target="_blank" >CSS3 Animations</a>, essas e outras perguntas ficaram obsoletas, entretanto, ela não oferece ao desenvolvedor alguns recursos e funcionalidades que só o JavaScript é capaz de oferecer, se levarmos em consideração a compatibilidade com navegadores antigos, por ser algo recente CSS3 Animations não estará disponível para alguns deles. controlAnimationJS oferece recursos e funcionalidades semelhantes para o desenvolvedor e adiciona novos, sendo de alto desempenho e incrivelmente leve: 13,8 KB.
    </p>
    <h2 class="subtitles-main">
        <span>
            Estrutura 
        </span>
    </h2>
    <p>
    Ao iniciar e durante o processo de desenvolvimento do código fonte, a modelagem foi baseada nos Design Pattern: <a href = "https://en.wikipedia.org/wiki/Factory_Method" target = "_ blank"> Factory Method </a> e <a href="https://en.wikipedia.org/wiki/Fa%C3%A7ade" target="_blank"> Facade </a>. Não entraremos em detalhes sobre esses padrões, mas falaremos sobre sua aplicação em nosso código-fonte.
    </p>
    <h3 class="subtitles-main">
        <span>
            Factory Method
        </span>
    </h3>
    <p>
        A lista abaixo identifica os elementos em nossa biblioteca de acordo com a estrutura Factory Method.
        <blockquote class="important-note">
            "A estrutura da forma como foi descrito no livro <a href="https://en.wikipedia.org/wiki/Design_Patterns" target="_blank" >Design
            Patterns: Elements of Reusable Object-Oriented Software</a>."
        </blockquote> 
    </p>
    <ul class="normal-list">
        <li><mark>Creator(Criador abstrato):</mark> O método <strong>controlAnimation.create()</strong>, sua ação é: Criar um novo objeto de animação com propriedades e métodos que o desenvolvedor precisará, mas seu uso é opcional.</li>

        <li><mark>ConcreteCreator(Criador concreto):</mark>O método <mark>controlAnimation.play( myAnimationObject )</mark> recebe o objeto de animação criado pelo desenvolvedor, e a partir dele cria uma variação que será utilizada internamente pela biblioteca como objeto de controle e reação.</li>

        <li><mark>Product(Produto abstrato):</mark> É o objeto que o desenvolvedor utilizará para construção de sua animação.</li>

        <li><mark>ConcreteProduct(Produto concreto):</mark> Uma variação do objeto de animação do desenvolvedor utilizada internamente pela biblioteca, ela não possuirá apenas as propriedades do objeto do desenvolvedor, mas também propriedades que foram consideradas desnecessárias para o desenvolvedor</li>
    </ul>
    <p>
        Em nosso código o Padrão de Projeto (Design Pattern) Factory Method estimulou o baixo acoplamento, maior flexibilidade e a eliminar a necessidade de acoplar classes específicas para aplicação em nível de código. Entretanto sua implementação talvez não tenha sido exatamente como a teoria sugere, mas a acredito que o resultado tenha ficado agradável.
    </p>
    <h3 class="subtitles-main">
        <span>
            Facade
        </span>
    </h3>
    <p>
        Embora não tenha ido a fundo em sua teoria, a motivação para sua utilização foi estruturar um sistema em subsistemas para auxiliar na redução de sua complexidade. Não iremos identificar os elementos como fizemos com o Padrão de Projeto (Design Pattern) anterior, mas fica muito claro que a classe Facade (Agrupadora) é o objeto <mark>controlAnimation</mark>, pois ele conhece quais as classes dos subsistemas são responsáveis pela chamada e delega chamadas do cliente aos objetos de subsistemas corretos.
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
        Entenderemos o que acontece internamente do processo de inicialização à finalização da animação. Observe o fluxograma abaixo:
    </p>
    <figure class="img-flowchart">
        <figcaption>controlAnimationJS Fluxograma</figcaption>
        <img src="../../controlAnimationJS-fluxograma.png" alt="controlAnimationJS Fluxograma"/>
    </figure>
    <p>
        Ao observar o fluxograma atentamente, notará que há uma seta vermelha apontando para um retângulo com a seguinte mensagem: “O objeto é ignorado” , evite que isso ocorra, pois a animação não continuará no fluxo e não será executada. A seguinte situação pode ocasionar essa mensagem: Quando o objeto de animação passado é invalido ou já está em uso. 
    </p>
    <p>
    Observe também que há um retângulo com a mensagem: “Dados de animação carregados”. Preste atenção a isso, pois é incrível, o desempenho de execução de cada animação é otimizado exponencialmente, visto que cada animação ao sair da fila passará rapidamente por sua execução. Isso torna possível ter várias animações rodando simultaneamente sem exigir muito do aplicação.    
    </p>
    <p>
    Também interessante é a mensagem de condição contida em uma das formas de losango: “O objeto foi atualizado?”, Isso indica que quando a animação sai da fila para ser executada, uma verificação rápida é feita para identificar se o objeto de animação do desenvolvedor foi submetido alguma mudança. Assim, o desenvolvedor não precisa invocar nenhum método de atualização quando muda algo em seu objeto de animação. Observe também que, quando há uma mudança, a animação é atualizada e reproduzida.
    </p>
    <h2 class="subtitles-main">
        <span>
            Fechamento
        </span>
    </h2>
    <p>
        Inicialmente controlAnimationJS estava sendo desenvolvida para ser um motor da animação, isto é, faria a parte interna e não a visual. Cada trecho do código foi pensado, revisado e otimizado para fazer o melhor uso possível dos recursos sem exigir muito da aplicação. Próximo ao final de sua construção, percebeu-se quão pequeno seria o trecho de código necessário para fazê-la também operar a parte visual, atualmente temos uma biblioteca leve e robusta capaz de realizar animações simples e complexas, sem deixar de lado o incrível motor de animação, que faz com que os limites desta biblioteca seja a sua criatividade.
    </p>
</article>

