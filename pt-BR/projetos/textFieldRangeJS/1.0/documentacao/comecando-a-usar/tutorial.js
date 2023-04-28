(function() {
  var myElement = $NS.getId( "myTextField" );
  function run( e ) {
    var e
    var key =  parseInt( $NS.textContent( (e.target || e.srcElement) ) );
    if(!isNaN(key)){
      textFieldRange( myElement ).moveCaret( key );
      return;
    }
  }
  document[ $NS.handlerEvent ]( $NS.onInEvent + 'click', run, false );
}());

