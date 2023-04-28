<?php
function multiplyString($string, $mult){
    $counting=0;
    $result="";
    while ($counting++ < $mult) {
        $result=$result.$string;
    }
    return $result;
}
function rootDirectory(){
    $pageURL=$_SERVER["PHP_SELF"];
    $checkURL=explode("/",$pageURL);
    $directories=array_splice($checkURL, 2, count($checkURL)-1);
    return multiplyString("../", count($directories)-1);
}

class removesFilesIncluded{};
$removesFilesIncluded=new removesFilesIncluded();
include_once(rootDirectory()."php-standard/site-in-production.php");
include_once(rootDirectory()."php-standard/path-to-site-directories.php");
?>