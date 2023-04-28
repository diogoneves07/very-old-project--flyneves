<main id="main-content">
    <?php
    include($pathToSiteDirectories->easyPathToDirectory->php."content-hidden.php");
    include($pathToSiteDirectories->easyPathToDirectory->php."header-generic.php");
    ?>
    <div class="default-background-image">
    <?php
    include($pathToSiteDirectories->easyPathToDirectory->php."library-logo.php");
    include($pathToSiteDirectories->easyPathToDirectory->php."content-block-top.php");
    include($home."articles/".$page);
    include($pathToSiteDirectories->easyPathToDirectory->php."content-block-bottom.php");
    ?>
    </div>
    <button class="fixed-tools-button">Ferramentas fixas</button>
</main>
