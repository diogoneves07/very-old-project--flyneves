<?php
    include("../recurring-files/php/single-page-and-table-support-get-directories.php");
?>
<!DOCTYPE html>
<html lang="en-US" id="other">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <!-- Language -->
        <meta name="language" content="en-US" />
        <!---->
        <title>
            Browsers support table – controlAnimationJS | FlyNeves
        </title>
        <!-- Title -->
        <meta name="twitter:title" content="Browsers support table – controlAnimationJS | FlyNeves" />
        <meta property="og:title" content="Browsers support table – controlAnimationJS | FlyNeves" />
        <!---->
        <!-- description -->
        <meta name="description" content="Discover the compatibility of the controlAnimationJS library between the main browsers." />
        <meta name="twitter:description" content="Discover the compatibility of the controlAnimationJS library between the main browsers." />
        <meta property="og:description" content="Discover the compatibility of the controlAnimationJS library between the main browsers." />
        <!---->
        <!-- URL -->
        <link rel="canonical" href="https://www.flyneves.com/en-US/projects/controlAnimationJS/1.0/browser-support-table/" />
        <meta property="og:url" content="https://www.flyneves.com/en-US/projects/controlAnimationJS/1.0/browser-support-table/" />
        <meta name="twitter:url" content="https://www.flyneves.com/en-US/projects/controlAnimationJS/1.0/browser-support-table/" />
        <!---->
        <!-- hreflang -->
        <link rel="alternate" href="https://www.flyneves.com/pt-BR/projetos/controlAnimationJS/1.0/tabela-de-suporte-a-navegadores/" hreflang="pt-BR">
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
                include("../articles/browsers-support-table/index.php");
                include($pathToSiteDirectories->easyPathToDirectory->php."message-about-the-article.php");
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
