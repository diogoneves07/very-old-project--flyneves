<?php


function tinyName($string){
    return  strtolower($string);
}
function escapeString($string) {
    return preg_replace("/[-\/\\^$*+?.()|[\]{}]/", "\\$&", $string);
}
function removeSpace($string){
    return str_replace(" ", "", $string);
}
function removeMultipleSpaces($string){
    $string=str_replace("  ", " ", $string);
    return str_replace("  ", " ", $string);
}
function split($char, $string){
    if($char==""){
        return str_split($string, 1);
}
    return explode($char, $string);
}
function length($o){
    if(is_string($o)){
        $o=split("",$o);
    }
    return count($o);
}
  function removeKeyEmpty($array) {
    $counting=0;
    $newArray=[];
    $length=length($array);
    while ($counting<$length) {
      $get=$array[$counting];
      if($get){
        $newArray[length($newArray)]=$get;
      }
      $counting++;
    }
    return $newArray;


  }
  function urlEncodeHTML($url){
    return htmlentities(urlencode($url));
  }
 
  function normalText($string){
    $string=str_replace('"',"'", $string);
    $string=preg_replace("/[\r\n]+/", "", $string);
    $string=preg_replace("/\s+/", " ", $string);
    return $string;
}

function querySelector($attribute, $value,$documentContent){
    $documentContent=str_replace("'",'"', $documentContent);
    $has=hasAttribute($attribute, $documentContent);
    $value = preg_quote(str_replace("-",'', $value));
    $elementsWithTheAttribute=array();
    foreach($has as $check){
        $tag=explode($attribute.'="'.$value.'"',str_replace("-",'', $check));

        if(count($tag)>1){
           
            if(count(getAttribute($attribute, $check, true))>0){

                //getElementByAttribute($tagName, $documentContent, $id)
                $tagName=str_replace(" ",'', explode(" ",explode("<",$check)[1])[0]);
                $attr=$attribute.'="';

                $attr=str_replace("  ",' ',getAttribute($attribute, $check, true)[0]);

                $elements=getElementByAttribute($tagName, $documentContent, $attr);

                //print_r(explode("<",$check));
                foreach($elements as $element){

                    array_push($elementsWithTheAttribute, $element);
                }
            }
            

        }
       
    }
    
    return $elementsWithTheAttribute;
}
function getAttribute($attribute, $documentContent, $return) {
    $documentContent=str_replace("'",'"', $documentContent);
    $attribute = preg_quote($attribute);
    $tagRegex = '/'.$attribute.'="*(.*?)"/si';

    preg_match_all($tagRegex,
    $documentContent,
    $matches);
    //echo htmlentities(implode("\r\n\r\n", $matches[1]))."<br><br>";
    if(count($matches)>0){
        if($return){
            return $matches[0];
        }
        else{
            return $matches[1];
        }
    }
    return $GLOBALS["emptyString"];
}
function hasAttribute($attribute, $documentContent) {
    $tagRegex = '/<[^>]*(.*?)>/si';
    preg_match_all($tagRegex,
    $documentContent,
    $tags);
    $tags=$tags[0];
    return $tags;
}


?>