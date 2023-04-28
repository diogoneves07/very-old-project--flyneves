<?php 
!isset($removesFilesIncluded->loadingMessage)? include($pathToSiteDirectories->easyPathToDirectory->php."loading-message.php") :0;
!isset($removesFilesIncluded->header)? include($pathToSiteDirectories->easyPathToDirectory->php."header.php") :0;
?>
<main id="main-content">
    <?php
    !isset($removesFilesIncluded->contentHidden)? include($pathToSiteDirectories->easyPathToDirectory->php."content-hidden.php") :0;
    !isset($removesFilesIncluded->headerGeneric)? include($pathToSiteDirectories->easyPathToDirectory->php."header-generic.php") :0;
    ?>
    <div class="default-background-image">
        <?php
        !isset($removesFilesIncluded->sectionLogo)? include($pathToSiteDirectories->sectionPageDirectory."recurring-files/php/section-logo.php") :0;
        ?>
        <div id="section-main">
        <?php

        !isset($removesFilesIncluded->anchorsLinks)? include($pathToSiteDirectories->easyPathToDirectory->php."anchors-links.php") :0;
        include($pathToSiteDirectories->easyPathToDirectory->php."translation-warning.php");
        !isset($removesFilesIncluded->article)? include($pathToSiteDirectories->sectionPageDirectory."articles/".$pathToSiteDirectories->easyPathToDirectory->pageDirectoryName.$pathToSiteDirectories->easyPathToDirectory->pageFileName) :0;
        !isset($removesFilesIncluded->helpProjectsMessage)? include($pathToSiteDirectories->easyPathToDirectory->php."help-projects-message.php") :0;

        ?>
        </div>
    </div>
</main>
<?php
!isset($removesFilesIncluded->footer)? include($pathToSiteDirectories->easyPathToDirectory->php."footer.php") :0;
!isset($removesFilesIncluded->scriptLoaded)? include($pathToSiteDirectories->easyPathToDirectory->php."script-loaded.php") :0;
?>