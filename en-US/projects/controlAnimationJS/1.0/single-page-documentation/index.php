<?php
include("../recurring-files/php/single-page-and-table-support-get-directories.php");
function str_replace_once($search, $replace, $subject){
    if(($pos = strpos($subject, $search)) !== false)
    {
        $ret = substr($subject, 0, $pos).$replace.substr($subject, $pos + strlen($search));
    }
    else
    {
        $ret = $subject;
    }
    return($ret);
}
function addArticle($article){
    $article = file_get_contents("http://".$_SERVER["HTTP_HOST"]."/".$article);
    $article = explode("href", $article);
    $couting = count($article);
    while ($couting-- ) {
        $article[ $couting ] = str_replace_once('../../', '../', $article[ $couting ]);
    }
    return  implode( "href", $article ) ;
}
?>
<!DOCTYPE html>
<html lang="en-US" id="other">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <!-- Language -->
        <meta name="language" content="en-US" />
        <!---->
        <title>
            Single page documentation – controlAnimationJS | FlyNeves
        </title>
        <!-- Title -->
        <meta name="twitter:title" content="Single page documentation – controlAnimationJS | FlyNeves" />
        <meta property="og:title" content="Single page documentation – controlAnimationJS | FlyNeves" />
        <!---->
        <!-- description -->
        <meta name="description" content="This page contains all the documentation controlAnimationJS library." />
        <meta name="twitter:description" content="This page contains all the documentation controlAnimationJS library." />
        <meta property="og:description" content="This page contains all the documentation controlAnimationJS library." />
        <!---->
        <!-- URL -->
        <link rel="canonical" href="https://www.flyneves.com/en-US/projects/controlAnimationJS/1.0/single-page-documentation/" />
        <meta property="og:url" content="https://www.flyneves.com/en-US/projects/controlAnimationJS/1.0/single-page-documentation/" />
        <meta name="twitter:url" content="https://www.flyneves.com/en-US/projects/controlAnimationJS/1.0/single-page-documentation/" />
        <!---->
        <!-- hreflang -->
         <link rel="alternate" href="https://www.flyneves.com/pt-BR/projetos/controlAnimationJS/1.0/documentacao-em-pagina-unica/" hreflang="pt-BR">
        <!---->
        <!-- Others(s) -->
        <meta name="robots" content="index, follow" />
        <!---->
        <?php include($pathToSiteDirectories->easyPathToDirectory->php."recurring-meta-tags.php");  ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $pathToSiteDirectories->easyPathToDirectory->css; ?>FlyNeves-default.css">   
        <?php include($pathToSiteDirectories->easyPathToDirectory->php."loading-message-theme.php");  ?>            
        <link rel="stylesheet" type="text/css" href="<?php echo $pathToSiteDirectories->sectionPageDirectory; ?>section-control.css">
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
                include("../articles/single-page-documentation/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/introduction/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/infrastructure/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/rules-of-use/index.php");
    
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/create/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/clone/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/config/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/play/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/resume/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/resume/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/restart/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/restartAll/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/cancel/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/cancelAll/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/get/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/getAll/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/back/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/backAll/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/go/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/goAll/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/addListener/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/addListenerAll/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/removeListener/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/removeListenerAll/index.php");

                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/building-keyframes/index.php");

                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/animationId/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/call/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/className/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/delay/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/direction/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/duration/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/easing/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/element/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/listenerFired/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/fill/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/insertStyle/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/iterations/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/iterationsComplete/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/keepFrameStyle/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/maxProgress/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/name/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/pause/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/pauseAll/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/play/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/progress/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/state/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/styleBetweenFrames/index.php");
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/timeline/index.php");
                ?>
                <article class="important-content-section">
                    <header>
                        <h1>
                        Getting started
                        </h1>
                    </header>
                    <p>
                    <a href="../documentation/getting-started/" target="_blank">controlAnimationJS Getting started</a>. 
                    </p>
                </article>
                <?php
                
                echo addArticle("en-US/projects/controlAnimationJS/1.0/articles/browsers-support-table/index.php");
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
