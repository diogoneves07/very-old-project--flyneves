(function() {
  
var elementBars = $NS.getTag($NS.getId("controlAnimation-bars"), "span", true);
var myAnimation = controlAnimation.create();
myAnimation.iterations =   Infinity;
myAnimation.direction =   "fluid-random-offset";
myAnimation[ 0 ] =       "height:100px; top: 0px; left: 0px; background-color: rgb(255, 0, 0); border-radius:0px; transform: rotate( 0deg );";
myAnimation[ 100 ] =     "300; 50; 100; rgb(0, 0, 255); 20; rotate( 360deg );";
controlAnimation.play( myAnimation.clone( elementBars ) );

//controlAnimation.play(myAnimationStars);

})();//