
(function() {
  
  $NS.getCSSTheme=function(theme, defaultCSS) {
    if(theme==0){
      return $NS.decodeText(defaultCSS);
  
    }
    if(theme==1){
      return $NS.decodeText(defaultCSS);
    }
    if(theme==2){
      return $NS.decodeText(defaultCSS);
  
    }
    if(theme==3){
      return $NS.decodeText(defaultCSS);
    }
  }
$NS.resizeBeforeAll=function(width, height){
  $NS.logoSectionControl(width);
}
var projectLogo,
    projectLogoImg;
 $NS.logoSectionControl=function(widthCurrent) {
   if(!projectLogo){
    projectLogo=$NS.getClass(document, "project-logo"),
    projectLogoImg=$NS.getTag(projectLogo, "img", true);
   }
    if (widthCurrent<400) {
      $NS.styleToElements(projectLogoImg, "height", "35px");
    }
    else{
      $NS.styleToElements(projectLogoImg, "height", "");

    }
    
}
})();