
(function() {
  
  $NS.getCSSTheme=function(theme, defaultCSS) {
    if(theme==0){
      return $NS.decodeText(defaultCSS)+"#controlAnimation-rectangle{background-color:black} #controlAnimation-rectangle-child{background-color:red}.controlAnimation-form-tutorial select{background-color:#16181d}";
  
    }
    if(theme==1){
      return $NS.decodeText(defaultCSS)+"#controlAnimation-rectangle-child{background-color:#3d7e9a}.controlAnimation-form-tutorial select{background-color:#262727;color:white;border-color:#000}";
    }
    if(theme==2){
      return $NS.decodeText(defaultCSS)+"#controlAnimation-rectangle{background-color:black;} #controlAnimation-rectangle-child{background-color:red;}.controlAnimation-form-tutorial select{background-color:#16181d;}";
  
    }
    if(theme==3){
      return $NS.decodeText(defaultCSS)+"#controlAnimation-rectangle{background-color:black}#controlAnimation-rectangle-child{background-color: red}.controlAnimation-form-tutorial select{background-color: #16181d}";
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
      $NS.styleToElements(projectLogoImg, "height", "70px");
    }
    else{
      $NS.styleToElements(projectLogoImg, "height", "");

    }
    
}})();