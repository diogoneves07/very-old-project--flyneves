
(function() {
  
  $NS.getCSSTheme=function(theme, defaultCSS) {
    if(theme==0){
      return $NS.decodeText(defaultCSS);
  
    }
    if(theme==1){
      return $NS.decodeText(defaultCSS)+".textFieldRange-tutorial textarea, .textFieldRange-tutorial button{background-color: #d3d1d1;border-color: #7a7a7a;color:#000;}";
    }
    if(theme==2){
      return $NS.decodeText(defaultCSS)+".textFieldRange-tutorial textarea, .textFieldRange-tutorial button{background-color:#111111;border-color:#7a7a7a;color:#cecece;}.textFieldRange-tutorial button{background-color:yellow;color:#000}.textFieldRange-tutorial button:focus, .textFieldRange-tutorial button:hover{background-color: green;border-color:#ccc5c5;}";
  
    }
    if(theme==3){
      return $NS.decodeText(defaultCSS)+".textFieldRange-tutorial textarea, .textFieldRange-tutorial button{background-color:#111111;border-color:#7a7a7a;color:#cecece;}";
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