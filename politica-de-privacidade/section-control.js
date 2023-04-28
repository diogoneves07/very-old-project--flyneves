(function () {
  var a = 'abbr fff aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video main button map select textarea object iframe option optgroup a b code div fieldset h1 h2 h3 h4 h4 h6 i label li ol p q span strong style table tbody td th tr ul article'.split(' '),
  b = a.length;
  while (b-- > 0) {
    document.createElement(a[b]);
  }
}());
(function () {
  var elementMain;
  var w = window;
  var d = document;
  var bodyElement = d.body;
  var documentAdjustingText = insertNewStyle('');
  function createElement(tag) {
    return d.createElement(tag);
  }
  function dataType(o) {
    return typeof o;
  }
  function insertNewStyle(element, content) {
    if (dataType(element) == 'string') {
      content = element;
      element = createElement('style');
      bodyElement.appendChild(element);
    } 
    else if (!element) {
      element = createElement('style');
      bodyElement.appendChild(element);
    }
    if (element.styleSheet) {
      // This is required for IE8 and below. href
      element.styleSheet.cssText = content;
    } 
    else {
      textContent(element, content);
    }
    return element;
  }
  function textContent(element, replace) {
    var porperty;
    if (dataType(element.textContent) == 'string') {
      porperty = 'textContent';
    } 
    else if (dataType(element.nodeValue) == 'string') {
      porperty = 'nodeValue';
    } 
    else {
      porperty = 'innerText';
    }
    if (dataType(replace) == 'string') {
      element[porperty] = replace;
    } 
    else {
      return element[porperty];
    }
  }
 
  function resizeContent() {
    var widthCurrent = w.innerWidth || d.documentElement.clientWidth || d.body.clientWidth;
    if (!elementMain) {
      elementMain = d.getElementById('simple-article-primary-div').style;
    }
    if (widthCurrent < 1100) {
      elementMain.width = '95%';
      elementMain.margin = '0 2.5%';
    } 
    else {
      elementMain.cssText = '';
    }
    if (widthCurrent < 980) {
      insertNewStyle(documentAdjustingText, 'body{font-size:16px;} .important-content-section{font-size:16px;} .phrase-preview-of-the-site{font-size:16px;} h1{font-size:35px;} h2{font-size:20px;} h3{font-size:18px;} h4{font-size:16px; h5{font-size:14px;}}');
    } 
    else {
      insertNewStyle(documentAdjustingText, '');
    }
  }
  if (w.addEventListener) {
    w.addEventListener('resize', resizeContent, false);
  } 
  else {
    w.attachEvent('onresize', resizeContent, false);
  }
  resizeContent();
}());
