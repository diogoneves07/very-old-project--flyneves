(function() {
  
  $NS.getCSSTheme=function(theme, defaultCSS) {
    if(theme==0){
      return $NS.decodeText(defaultCSS)+".home-image-text-2{background-color:#252733;}.home-image-text-3{background-color:#1c1e24;}.icon-construction-building-html-medium{border-color:#0e4663;}.icon-construction-building-html-medium span{border-color:rgb(96,158,179);}";
  
    }
    if(theme==1){
      return $NS.decodeText(defaultCSS)+".home-image-text-2{background-color:#bdbdc4;}.home-image-text-3{background-color:#d2d2d6;}.icon-construction-building-html-medium{border-color:#0e4663;}.icon-construction-building-html-medium span{border-color:rgb(96, 158, 179);}";
    }
    if(theme==2){
      return $NS.decodeText(defaultCSS)+".home-image-text-2{background-color:#131314;}.home-image-text-3{background-color:#0e0e0f;}.icon-construction-building-html-medium{border-color:#0e4663;}.icon-construction-building-html-medium span{border-color:rgb(96, 158, 179);}";
  
    }
    if(theme==3){
      return $NS.decodeText(defaultCSS)+".home-image-text-2{background-color:#131314;}.home-image-text-3{background-color:#0e0e0f;}.icon-construction-building-html-medium{border-color:#0e4663;}.icon-construction-building-html-mediumspan{border-color:rgb(96,158,179);}";
    }
  }

$NS.resizeBeforeAll=function(width, height){
  $NS.logoSectionControl(width);
}
 $NS.logoSectionControl=function() {}
})();