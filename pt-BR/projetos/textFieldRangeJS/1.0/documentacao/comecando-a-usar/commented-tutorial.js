
function animateTextField(element, text, time) {
    /* Texto a ser inserido automaticamente */
    element.value = text;
    /* Inserindo texto */
    var myTextField = textFieldRange(element);
    /* Obtendo o objeto textFieldRange */
    var breakLines = myTextField.lines();
    /* Obtendo as linhas no campo de texto, essa variável servirá para indicar e repassar, o estado atual de cada linha durante o processo de inserção no campo de texto. */
    var lineBreak = myTextField.lineBreak;
    /* Obtendo o caracter de quebra de linha utilizado pelo navegador */
    var breakLinesLength = breakLines.length;
    /* Obtendo a quantidade de caracteres utilizado para quebra linha - ("\n" ou  "\r\n"). */
    element.value = '';
    /* Limpando campo de texto. */
    var counting = - 1;
    while (counting++ < breakLinesLength - 1) {
      element.value = element.value + lineBreak;
    }  /* Inserindo quebras de linha no campo de texto, para referenciar as linhas, dessa forma saberemos onde começa cada linha. */
  
    function randomLine() {
      return Math.round(Math.random() * (breakLinesLength - 1));
    }  /* Sorteando aleatoriamente a linha que sofrerá edição. */
  
    var TimeoutId;
    /* Variável que guardará o valor do id da função setTimeout */
    function editing() {
      var counting = - 1;
      var found = false;
      /* Essa variável servirá para verificar se a linha escolhida esta vazia. */
      var linePosition = randomLine();
      /* Obtendo a linha sorteada */
      var editLine = breakLines[linePosition];
      /* Obtendo o conteúdo a linha sorteada */
      var string;
      if (editLine == '') {
        /* Verificando se a linha estar vazia */
        while (counting++ < breakLinesLength - 1) {
          editLine = breakLines[counting];
          if (editLine != '') {
            found = true;
            break;
          }
        }      /* Caso a linha sorteada estiver vazia, na estrutura de repetição, é selecionada a primeira linha que houver texto. */
  
        linePosition = counting;
        /* Passando a linha selecionada para edição para variável */
      } 
      else {
        /* Caso a linha sorteada não esteja vazia.*/
        found = true;
      }
      if (found) {
        string = editLine.substring(0, 1);
        /* obtendo o primeiro caracter da linha */
        breakLines[linePosition] = editLine.substring(string.length, Infinity);
        /* Removendo o caracter que irá ser inserido da linha. */
        myTextField.setCaret(linePosition, - 1);
        /* Posicionando o caret no penúltimo caracter da linha */
        myTextField.insert(string);
        /* Inserindo o caracter na  linha selecionada no campo de texto. */
        TimeoutId = setTimeout(function () {
          editing();
        }, time);
        /* Chamando a função novamente para repetir o processo  */
      } 
      else {
        /* Caso a variável " found " tenha como valor false, é entendido que o processo de inserção foi concluído. */
        clearTimeout(TimeoutId);
        /* Interrompendo a chamada da função */
      }
    }
    editing();
  }

  animateTextField(element, "Lorem ipsum dolor sit  amet, consectetur adipisicing elit. Aperiam veniam  libero aut nostrum mollitia", 0);
  /* Chamando a função principal do nosso exemplo, ela recebe 3 argumentos; o elemento, o texto, e o tempo para a função setTimeout */
