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
var librariesList, 
ibrariesListJS,
 librariesListJSStyle,
 librariesListJSli;
 $NS.logoSectionControl=function(widthCurrent) {
  
   if(!librariesList){
    librariesList = $NS.getClass(document, 'projects-list')
    librariesListJS = $NS.getClass(librariesList, 'projects-list-links');
    librariesListJSStyle=librariesListJS.style;
    librariesListJSli = $NS.getTag(librariesListJS, 'li', true);
   }
   $NS.styleToElements(librariesListJSli, "cssText", "");
    var liWidth=librariesListJSli[0].offsetWidth;
    librariesListJSStyle.width = (liWidth * (librariesListJSli.length + 2)) + 'px';
    var librariesListStyle = librariesList.style;
    //var readingContenteSectionWidth=sectionMain.offsetWidth;
    if (widthCurrent < 1150) {
      // librariesListStyle.width=(readingContenteSectionWidth-40)+"px";
      librariesListStyle.margin = '0';
      librariesListStyle.width = '98%';
    } 
    else {
      librariesListStyle.width = '98%';
      librariesListStyle.marginLeft = '2%';
    }
    if(widthCurrent<500){
      librariesListJSStyle.width = "100%";
      $NS.styleToElements(librariesListJSli, "float", "none");
      $NS.styleToElements(librariesListJSli, "width", "94%");
      $NS.styleToElements(librariesListJSli, "margin", "0");
      $NS.styleToElements(librariesListJSli, "margin-left", "10px");
      $NS.styleToElements(librariesListJSli, "marginBottom", "80px");
    }
  }
})();