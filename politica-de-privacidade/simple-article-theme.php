<?php
function porpertyCookieValue($porperty, $cookie) {
    $cookie=explode($porperty.":", $cookie)[1];
    $cookie=explode(",", $cookie)[0];
return $cookie;
}
$flyNevesView="FlyNeves-view";
if(isset($_COOKIE[$flyNevesView])){
    $theme=$_COOKIE[$flyNevesView];
    $theme=porpertyCookieValue("theme", $theme);
}
else if(isset($_GET["theme"])){
    $theme=$_GET["theme"];
}
else{
    $theme=0; 
}
$theme=(int) $theme;

if($theme==1){
?>
<link rel="stylesheet" type="text/css" href="simple-article-light.css">
<?php
}
else if($theme==2){
?>
<link rel="stylesheet" type="text/css" href="simple-article-high-contrast.css">
<?php
}
else if($theme==3){
?>
<link rel="stylesheet" type="text/css" href="simple-article-very-dark.css">
<?php
}

else{
?>
<link rel="stylesheet" type="text/css" href="simple-article-dark.css">
<?php
}
?>
