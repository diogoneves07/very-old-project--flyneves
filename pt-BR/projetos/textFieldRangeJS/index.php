
<?php
include("recurring-files/php/documentation-index-page-get-directories.php");
?>
<!DOCTYPE html>
<html id="other" lang="pt-BR">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <!-- Language -->
        <meta name="language" content="pt-BR">
        <!---->
        <title>
            Versões – textFieldRangeJS | FlyNeves
        </title>
        <!-- Title -->
        <meta name="twitter:title" content="Versões – textFieldRangeJS | FlyNeves">
        <meta property="og:title" content="Versões – textFieldRangeJS | FlyNeves">
        <!---->
        <!-- description -->
        <meta name="description" content="Nesta página, você encontrará links para todas as versões da biblioteca textFieldRangeJS.">
        <meta name="twitter:description" content="Nesta página, você encontrará links para todas as versões da biblioteca textFieldRangeJS.">
        <meta property="og:description" content="Nesta página, você encontrará links para todas as versões da biblioteca textFieldRangeJS.">
        <!---->
        <!-- URL -->
        <link rel="canonical" href="https://www.flyneves.com/pt-BR/projetos/textFieldRangeJS/">
        <meta property="og:url" content="https://www.flyneves.com/pt-BR/projetos/textFieldRangeJS/">
        <meta name="twitter:url" content="https://www.flyneves.com/pt-BR/projetos/textFieldRangeJS/">
        <!---->
       <!-- hreflang -->
       <link rel="alternate" href="https://www.flyneves.com/en-US/projects/textFieldRangeJS/" hreflang="en-US">
        <!---->
        <!-- Others(s) -->
        <meta name="robots" content="index, follow">
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
                include("recurring-files/php/section-logo.php");
                ?>
                <div id="section-main">
                <?php
                include($pathToSiteDirectories->easyPathToDirectory->php."anchors-links.php");
                include("articles/documentacao/index.php");
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