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
        $paths->sectionPageDirectory=""; 
    }
    else if(count(explode("php",$checkURL[4]))>1){
        $paths->rootDirectory="../../";
        $paths->languageDirectory="../";
        $paths->sectionDirectory=""; 
        $paths->sectionPageDirectory=""; 
    }
    else if(count(explode("php",$checkURL[5]))>1){
        $paths->rootDirectory="../../../";
        $paths->languageDirectory="../../";
        $paths->sectionDirectory=""; 
        $paths->sectionPageDirectory=""; 

    }
    else if(count(explode("php",$checkURL[6]))>1){
        $paths->rootDirectory="../../../../";
        $paths->languageDirectory="../../../";
        $paths->sectionDirectory="../"; 
        $paths->sectionPageDirectory=""; 

    }
    else if(count(explode("php",$checkURL[7]))>1){
        $paths->rootDirectory="../../../../../";
        $paths->languageDirectory="../../../../";
        $paths->sectionDirectory="../../"; 
        $paths->sectionPageDirectory="../"; 
    }
    else if(count(explode("php",$checkURL[8]))>1){
        $paths->rootDirectory="../../../../../../";
        $paths->languageDirectory="../../../../../";
        $paths->sectionDirectory="../../../"; 
        $paths->sectionPageDirectory="../../"; 

    }
    else{
        print_r($checkURL);
    }
    

    $easyPathToDirectory=new directories();
    $easyPathToDirectory->recurringFiles=$paths->languageDirectory."recurring-files/";
    $easyPathToDirectory->php=$easyPathToDirectory->recurringFiles."php/";
    $easyPathToDirectory->css=$easyPathToDirectory->recurringFiles."css/";
    $easyPathToDirectory->images=$easyPathToDirectory->recurringFiles."images/";
    $easyPathToDirectory->JavaScript=$easyPathToDirectory->recurringFiles."javaScript/";
    $easyPathToDirectory->json=$easyPathToDirectory->recurringFiles."json/";
    $easyPathToDirectory->pageFileName=$pageFileName;
    $easyPathToDirectory->pageDirectoryName=$pageDirectoryName;

    $paths->easyPathToDirectory=$easyPathToDirectory;
     
    return $paths;
}
$pathToSiteDirectories=pathDirectory();
?>