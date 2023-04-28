<?php
include("recurring-files/php/home-pages-get-directories.php");
/*if(!isset($_GET["key-words"])){
exit(header("location:../")); nav
}*/

$pathFunctions="../../php-standard/";
include_once($pathFunctions."remove-accents-string.php");
include_once($pathFunctions."get-page-related-string.php");
include_once($pathFunctions."simple-function.php");

$userSearch=htmlentities(urldecode($_GET["key-words"]));
$jsonFile=file_get_contents("data-for-search/FlyNeves-data.json");
$maxLinkList =4;
$counting=0;
$linksFound=getPageRelatedString($userSearch, $jsonFile, $maxLinkList);
$length=length($linksFound);
$linksFoundListHTML=[];
$accessSearchPages=[];
$countingPage=0;
$maxList=$maxLinkList;


$getPage="in-page";
if(isset($_GET[$getPage])){
    $returnPage=intval(preg_replace("/[^0-9]/", "", $_GET[$getPage]));
}
else{
    $returnPage=0;
}

$readingIconHTML="
    <div class=\"icon-open-book-in-html\">
        <div class=\"icon-open-book-in-html-div-1\">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class=\"icon-open-book-in-html-div-2\">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>";
    $newsInconHTML="<div class=\"icon-open-book-in-html incon-news\">
    <div class=\"icon-open-book-in-html-div-1\">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class=\"icon-open-book-in-html-div-2\">
        !
    </div>
</div>";
$warningsIconHTML="<div class=\"icon-warnings-in-html\">
<div>
    <span>
        !
    </span>
</div>
</div>";


//echo "<pre>";
//print_r($linksFound);
      while ($counting<$length) {
        $get=$linksFound[$counting][0];
        $type=$get["documentContentType"];
        $asideIncon;
        if($type=="news"){
          $asideIncon=$newsInconHTML;
        }
        else if($type=="warning"){
          $asideIncon=$warningsIconHTML;

        }
        else{
          $asideIncon=$readingIconHTML;
        }
        $title=$get["title"];
        $description=$get["description"];

        $urlEncoded=$get["url"];
            $removeDomain=explode("/", $urlEncoded);
            
            
            $urlEncoded=array_splice($removeDomain, 3 ,count($removeDomain));
            $urlEncoded=$pathToSiteDirectories->rootDirectory.implode("/", $urlEncoded);
           


        $linksFoundListHTML[length($linksFoundListHTML)]="
        <div class=\"important-content-section\">
            <output>
                ".$asideIncon."
                <a href=\""."$urlEncoded"."\">
                    <strong>
                        ".$title."
                    </strong>
                    ".$description."
                </a>
            </output>
        </div>
        ";
        if($counting>$maxList && $length-$counting>0){
            
            //$accessSearchPages[length($linksFoundListHTML)]="<a href=\"".$urlEncoded."\">".$countingPage."</a>";
            $maxList+=$maxList;
            $countingPage++;
            if($counting++<$length){
                $countingPage++;
            }
        }
        //$aElement.href=get["url"];
        
        //appendChild($linksFoundsListcontainer, $outputElement);
        $counting++;
}
if($returnPage>length($linksFoundListHTML)){
    $returnPage=length($linksFoundListHTML);
}
$list=$returnPage*$maxLinkList;
$linksFoundListHTML=implode(" ", array_splice($linksFoundListHTML, $list, $maxLinkList));


$linksFoundListHTML="<div class=\"links-founds-list\">".$linksFoundListHTML."</div>";

$urlOriginal="./?key-words=".$userSearch."&".$getPage."=";
$counting=0;
$countingPage--;
while ($counting < $countingPage) {
    if($counting==$returnPage){
        $searchPagesCurrent="class=\"search-pages-current\"";
    }
    else{
        $searchPagesCurrent="";
    }
    $accessSearchPages[length($accessSearchPages)]="<li ".$searchPagesCurrent."><a href=\"".$urlOriginal.$counting."\">".$counting."</a></li>";
    $counting++;
}
$accessSearchPages=implode(" ", $accessSearchPages);


?>

<!DOCTYPE html>
<html lang="pt-BR" id="other">
<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <!-- Language -->
        <meta name="language" content="pt-BR">
        <!---->
        <title>
            Results — FlyNeves
        </title>
        <!-- Title -->
        <meta name="twitter:title" content="Results — FlyNeves">
        <meta property="og:title" content="Results — FlyNeves">
        <!---->
        <!-- description -->
        <!-- URL -->
        <link rel="canonical" href="https://www.flyneves.com/pt-BR/searching-the-site/">
        <meta property="og:url" content="https://www.flyneves.com/pt-BR/searching-the-site/">
        <meta name="twitter:url" content="https://www.flyneves.com/pt-BR/searching-the-site/">
        <!---->
        <!-- Author(s) -->
        
        
        
        
        
        <!---->
        <!-- Others(s) -->
        <meta name="robots" content="noindex, follow">
        <!---->
        <?php include($pathToSiteDirectories->easyPathToDirectory->php."recurring-meta-tags.php");  ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $pathToSiteDirectories->easyPathToDirectory->css; ?>FlyNeves-default.css">   
        <?php include($pathToSiteDirectories->easyPathToDirectory->php."loading-message-theme.php");  ?>            
        <link rel="stylesheet" type="text/css" href="<?php echo $pathToSiteDirectories->sectionDirectory; ?>section-control.css">
        <script src="<?php echo $pathToSiteDirectories->easyPathToDirectory->JavaScript; ?>FlyNeves-default.js"></script>
        <script src="<?php echo $pathToSiteDirectories->sectionDirectory; ?>section-control.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $pathToSiteDirectories->sectionDirectory; ?>dark-theme.css">

    </head>
    <body>
    <?php 
        include($pathToSiteDirectories->easyPathToDirectory->php."loading-message.php");
        include($pathToSiteDirectories->easyPathToDirectory->php."header.php");
        ?>
        <main id="main-content">
            <?php
            include($pathToSiteDirectories->easyPathToDirectory->php."content-hidden.php");
            include($pathToSiteDirectories->easyPathToDirectory->php."header-generic.php");
            ?>
            <div class="default-background-image">
                <div id="section-main">
                    <section class="important-content-section">
                        <h2>
                            <span>
                            Results for: <?php echo $userSearch; ?>
                            </span>
                        </h2>
                        <div class="text-and-icon">
                            <div class="icon-open-book-in-html">
                                <div class="icon-open-book-in-html-div-1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="icon-open-book-in-html-div-2">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <strong>Articles</strong>
                        </div>
                        <div class="text-and-icon">
                            <div class="icon-open-book-in-html incon-news">
                                <div class="icon-open-book-in-html-div-1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="icon-open-book-in-html-div-2">
                                    !
                                </div>
                            </div>
                            <strong>Important pages</strong>
                        </div>
                        <div class="text-and-icon">
                            <div class="icon-warnings-in-html">
                                <div>
                                    <span>
                                    !
                                    </span>
                                </div>
                            </div>
                            <strong>Warnings</strong>
                        </div>
                    </section>   
                <?php
                include($pathToSiteDirectories->easyPathToDirectory->php."anchors-links.php");
                echo $linksFoundListHTML;

                ?>
                 <section class="important-content-section">
                    <header>
                        <h3 class="subtitles-main access-search-pages-title">
                            <span>
                            Pages with other search results:
                            </span>
                        </h3>
                    </header> 
                    <nav class="container-access-search-pages">
                    <ol>
                        <?php
                        echo $accessSearchPages;
                        ?>
                    </ol>
                    </nav>
                </section>   
                <?php
                include($pathToSiteDirectories->easyPathToDirectory->php."libraries-and-projects.php");
                include($pathToSiteDirectories->easyPathToDirectory->php."help-projects-message.php");
                ?>
                </div>
            </div>
        </main>
        <?php
        include($pathToSiteDirectories->easyPathToDirectory->php."footer.php");
        include($pathToSiteDirectories->easyPathToDirectory->php."script-loaded.php");
        ?>
    </body>
</html>
