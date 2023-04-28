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
    $directories=array_splice($checkURL, 1, count($checkURL)-1);
    return multiplyString("../", count($directories)-1);
}

class removesFilesIncluded{};
$removesFilesIncluded=new removesFilesIncluded();
include_once(rootDirectory()."php-standard/site-in-production.php");
include_once(rootDirectory()."php-standard/path-to-site-directories.php");
?>
<!DOCTYPE html>
<html lang="en-US" id="other">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <!-- Language -->
        <meta name="language" content="en-US">
        <!---->
        <title>
            Introduction – textFieldRangeJS | FlyNeves
        </title>
        <!-- Title -->
        <meta name="twitter:title" content="Introduction – textFieldRangeJS | FlyNeves">
        <meta property="og:title" content="Introduction – textFieldRangeJS | FlyNeves">
        <!---->
        <!-- description -->
        <meta name="description" content="Unifies the properties and methods of text range objects: ( Selection and createTextRange() ), implementing fantastic features and making it extremely simple to use.">
        <meta name="twitter:description" content="Unifies the properties and methods of text range objects: ( Selection and createTextRange() ), implementing fantastic features and making it extremely simple to use.">
        <meta property="og:description" content="Unifies the properties and methods of text range objects: ( Selection and createTextRange() ), implementing fantastic features and making it extremely simple to use.">
        <!---->
        <!-- URL -->
        <link rel="canonical" href="https://www.flyneves.com/en-US/projects/textFieldRangeJS/1.0/">
        <meta property="og:url" content="https://www.flyneves.com/en-US/projects/textFieldRangeJS/1.0/">
        <meta name="twitter:url" content="https://www.flyneves.com/en-US/projects/textFieldRangeJS/1.0/">
        <!---->
        <!-- hreflang -->
        <link rel="alternate" href="https://www.flyneves.com/pt-BR/projetos/textFieldRangeJS/1.0/" hreflang="pt-BR">
        <!---->
        <!-- Others(s) -->
        <meta name="robots" content="index, follow">
        <!---->
        <?php include($pathToSiteDirectories->easyPathToDirectory->php."recurring-meta-tags.php");  ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $pathToSiteDirectories->easyPathToDirectory->css; ?>FlyNeves-default.css">   
        <?php include($pathToSiteDirectories->easyPathToDirectory->php."loading-message-theme.php");  ?>            
        <link rel="stylesheet" type="text/css" href="<?php echo $pathToSiteDirectories->sectionPageDirectory; ?>section-control.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $pathToSiteDirectories->sectionPageDirectory; ?>dark-theme.css">
        <script src="<?php echo $pathToSiteDirectories->easyPathToDirectory->JavaScript; ?>FlyNeves-default.js"></script>
        <script src="<?php echo $pathToSiteDirectories->sectionPageDirectory; ?>section-control.js"></script>
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
                <?php
                include($pathToSiteDirectories->sectionPageDirectory."recurring-files/php/section-logo.php");
                ?>
                <div id="section-main">
                <?php
                include($pathToSiteDirectories->easyPathToDirectory->php."anchors-links.php");
                include($pathToSiteDirectories->easyPathToDirectory->php."translation-warning.php");
                include("articles/introduction/index.php");
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
