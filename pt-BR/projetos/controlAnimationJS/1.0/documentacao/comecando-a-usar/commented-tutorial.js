var rectangle=document.getElementById("rectangle"),
rectangleChild = document.getElementById("rectangle-child"),
moveX = rectangle.clientWidth - rectangleChild.offsetWidth,
/* Obtendo a largura do retângulo e subtraindo pela largura do elemento que irá se movimentar. */
moveY = rectangle.clientHeight - rectangleChild.offsetHeight;
/* Obtendo a altura do retângulo e subtraindo pela altura do elemento que irá se movimentar. */

var object = {
  id: "top",
  delay: "raf",
  iteration: Infinity,
  mode: "smart",
  add:2
}
/* Iniciamos a criação do objeto, com propriedades que irão aparecer nas dois objetos de animação. */
object.animate = {
  [moveY]:function ( counter ) {
    rectangleChild.style.top = counter + "px";
  }
}
/* Adicionamos a propriedade animate, e dentro dela no objeto colocamos como propriedade o valor da variável moveY, que indica a locomoção máxima para baixo */
controlAnimation.play( object );
/* Iniciando a animação que fará com que o elemento se movimente para cima e para baixa.*/
object.id = "left";
/* Reaproveitando o objeto e alterando seu id*/
object.animate = {
  [moveX]: function ( counter ) {
    rectangleChild.style.left = counter + "px";
  }
}
/* Adicionamos a propriedade animate, e dentro dela no objeto colocamos como propriedade o valor da variável moveX, que indica a locomoção máxima para direita */

controlAnimation.play( object );
/* Iniciando a animação que fará com que o elemento se movimente para esquerda e para direita.*/
