<?php
    include("home/recurring-files/php/home-pages-get-directories.php");
?>
<!DOCTYPE html>
<html lang="pt-BR" id="other">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <!-- Language -->
        <meta name="language" content="pt-BR">
        <!---->
        <title>
        Página não encontrada! - FlyNeves
        </title>
        <!-- Title -->
        <meta name="twitter:title" content="Página não encontrada! - FlyNeves">
        <meta property="og:title" content="Página não encontrada! - FlyNeves">
        <!-- URL -->
        <link rel="canonical" href="https://www.flyneves.com/pt-BR/perdido-no-site/">
        <meta property="og:url" content="https://www.flyneves.com/pt-BR/perdido-no-site/">
        <meta name="twitter:url" content="https://www.flyneves.com/pt-BR/perdido-no-site/">
        <!---->
        <!-- hreflang -->
            <link rel="alternate" href="https://www.flyneves.com/en-US/lost-on-site/" hreflang="en-US">
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
                include("home/recurring-files/php/section-logo.php");
                ?>
                <div id="section-main">
                <?php
                include($pathToSiteDirectories->easyPathToDirectory->php."anchors-links.php");
                ?>
                <?php
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
