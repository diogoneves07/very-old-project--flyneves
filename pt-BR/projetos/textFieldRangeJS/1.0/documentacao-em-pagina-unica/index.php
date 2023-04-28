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
<html lang="pt-BR" id="other">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <!-- Language -->
        <meta name="language" content="pt-BR" />
        <!---->
        <title>
            Documentação em página única – textFieldRangeJS | FlyNeves
        </title>
        <!-- Title -->
        <meta name="twitter:title" content="Documentação em página única – textFieldRangeJS | FlyNeves" />
        <meta property="og:title" content="Documentação em página única – textFieldRangeJS | FlyNeves" />
        <!---->
        <!-- description -->
        <meta name="description" content="Esta página contém toda a documentação da biblioteca textFieldRangeJS." />
        <meta name="twitter:description" content="Esta página contém toda a documentação da biblioteca textFieldRangeJS." />
        <meta property="og:description" content="Esta página contém toda a documentação da biblioteca textFieldRangeJS." />
        <!---->
        <!-- URL -->
        <link rel="canonical" href="https://www.flyneves.com/pt-BR/projetos/textFieldRangeJS/1.0/documentacao-em-pagina-unica/" />
        <meta property="og:url" content="https://www.flyneves.com/pt-BR/projetos/textFieldRangeJS/1.0/documentacao-em-pagina-unica/" />
        <meta name="twitter:url" content="https://www.flyneves.com/pt-BR/projetos/textFieldRangeJS/1.0/documentacao-em-pagina-unica/" />
        <!---->
        <!-- hreflang -->
        <link rel="alternate" href="https://www.flyneves.com/en-US/projects/textFieldRangeJS/1.0/single-page-documentation/" hreflang="en-US">
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
                include("../articles/documentacao-em-pagina-unica/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/introducao/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/infraestrutura/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/regras-de-uso/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/insert/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/appendString/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/replaceSelection/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/findString/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/size/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/setCaret/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/select/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/lines/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/breakLines/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/moveCaret/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/refresh/index.php");


                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/selection/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/beforeSelection/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/afterSelection/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/selectionEnd/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/selectionStart/index.php");

                
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/currentLine/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/currentLineText/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/currentLineEnd/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/currentLineStart/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/numberOfLines/index.php");



                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/top/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/left/index.php");

                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/x/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/y/index.php");


                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/offsetTop/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/offsetLeft/index.php");

                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/viewTop/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/viewLeft/index.php");
                


                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/charHeight/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/charsWidth/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/charList/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/charBreak/index.php");


                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/lineHeight/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/textFieldHeight/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/textFieldWidth/index.php");
                
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/borderWidth/index.php");
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/padding/index.php");
                ?>
                <article class="important-content-section">
                    <header>
                        <h1>
                        Começando a usar 
                        </h1>
                    </header>
                    <p>
                    <a href="../documentacao/comecando-a-usar/" target="_blank"> Começando a usar textFieldRangeJS</a>. 
                    </p>
                </article>
               <?php
                echo addArticle("pt-BR/projetos/textFieldRangeJS/1.0/articles/tabela-de-suporte-a-navegadores/index.php");
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
