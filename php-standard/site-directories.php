<?php
function pathDirectory(){
    class paths {};
    class directories {};
    $pageURL=$_SERVER["PHP_SELF"];
    $paths=new paths();
    $checkURL=explode("/",$pageURL);
    $currentPage=$checkURL;
    $pageFileName=$currentPage[count($currentPage)-1];
    $pageDirectoryName=$currentPage[count($currentPage)-2]."/";

    if(count(explode("php",$checkURL[3]))>1){
        $paths->rootDirectory="../";
        $paths->languageDirectory="";
        $paths->sectionDirectory=""; 

    }
    else{
        $directories=array_splice($checkURL, 4, count($checkURL));
        $directories=array_splice($directories, 0, count($directories)-1);
        $directorysLength=count($directories);
        $string="../";
        $paths->rootDirectory=multiplyString($string, $directorysLength+2);
        $paths->languageDirectory=multiplyString($string, $directorysLength+1);
        $paths->sectionDirectory=multiplyString($string, $directorysLength);
    }
    $paths->pageFileName=$pageFileName;
    $paths->pageDirectoryName=$pageDirectoryName;

    $easyPathToDirectory=new directories();
    $easyPathToDirectory->recurringFiles=$paths->languageDirectory."recurring-files/";
    $easyPathToDirectory->php=$easyPathToDirectory->recurringFiles."php/";
    $easyPathToDirectory->css=$easyPathToDirectory->recurringFiles."css/";
    $easyPathToDirectory->images=$easyPathToDirectory->recurringFiles."images/";
    $easyPathToDirectory->javaScript=$easyPathToDirectory->recurringFiles."javaScript/";
    $easyPathToDirectory->json=$easyPathToDirectory->recurringFiles."json/";

    $paths->easyPathToDirectory=$easyPathToDirectory;

    return $paths;
}
$pathToWebsiteDirectories=pathDirectory();

?>