(function() {
  
  $NS.getCSSTheme=function(theme, defaultCSS) {
    if(theme==0){
      return $NS.decodeText(defaultCSS)+".container-access-search-pages li{background-color: #16181d}.search-pages-current{background-color:rgb(10, 10, 10)!important}";
  
    }
    if(theme==1){
      return $NS.decodeText(defaultCSS)+".container-access-search-pages li{background-color: #cecece}.search-pages-current{background-color:#979797!important}";
    }
    if(theme==2){
      return $NS.decodeText(defaultCSS)+".container-access-search-pages li{background-color: #16181d}.search-pages-current{background-color:#000!important}";
  
    }
    if(theme==3){
      return $NS.decodeText(defaultCSS)+".container-access-search-pages li{background-color: #16181d}.search-pages-current{background-color:#000!important}";
    }
  }

$NS.resizeBeforeAll=function(width, height){
  $NS.logoSectionControl(width);
}
var librariesList, 
ibrariesListJS,
 librariesListJSStyle,
 librariesListJSli;
 $NS.logoSectionControl=function(widthCurrent) {
  
   
   
  }
})();