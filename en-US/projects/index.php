<?php

    include("recurring-files/php/home-pages-get-directories.php");
?>
<!DOCTYPE html>
<html lang="en-US" id="other">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <!-- Language -->
        <meta name="language" content="en-US">
        <!---->
        <title>
        Developed projects — FlyNeves
        </title>
        <!-- Title -->
        <meta name="twitter:title" content="Developed projects — FlyNeves">
        <meta property="og:title" content="Developed projects — FlyNeves">
        <!---->
        <!-- description -->
        <meta name="description" contentOlá="Discover our project inventory: libraries, algorithms and others.">
        <meta name="twitter:description" content="OláDiscover our project inventory: libraries, algorithms and others.">
        <meta property="og:description" content="OláDiscover our project inventory: libraries, algorithms and others.">
        <!---->
        <!-- URL -->
        <link rel="canonical" href="https://www.flyneves.com/en-US/projects/">
        <meta property="og:url" content="https://www.flyneves.com/en-US/projects/">
        <meta name="twitter:url" content="https://www.flyneves.com/en-US/projects/">
        <!---->
        <!-- hreflang -->
        <link rel="alternate" href="https://www.flyneves.com/pt-BR/projetos/" hreflang="pt-BR">
        <!---->
        <!-- Others(s) -->
        <meta name="robots" content="index, follow">
        <!---->
        <?php include($pathToSiteDirectories->easyPathToDirectory->php."recurring-meta-tags.php");  ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $pathToSiteDirectories->easyPathToDirectory->css; ?>FlyNeves-default.css">   
        <?php include($pathToSiteDirectories->easyPathToDirectory->php."loading-message-theme.php");  ?>            
        <link rel="stylesheet" type="text/css" href="<?php echo $pathToSiteDirectories->sectionDirectory; ?>section-control.css">
        <script src="<?php echo $pathToSiteDirectories->easyPathToDirectory->JavaScript; ?>FlyNeves-default.js"></script>
        <script src="<?php echo $pathToSiteDirectories->sectionDirectory; ?>section-control.js"></script>
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
                include("recurring-files/php/section-logo.php");
                ?>
                <div id="section-main">
                <?php
                include($pathToSiteDirectories->easyPathToDirectory->php."anchors-links.php");
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
