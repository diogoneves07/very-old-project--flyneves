<div class="search-container search">
    <header class="content-hidden-titles">
        <h4>
            <span>
                Pesquisar
            </span>
        </h4>
    </header> 
    <?php
    $pageSearch=explode("/", $_SERVER["PHP_SELF"]);
    if($pageSearch[count($pageSearch)-2]=="pesquisando-no-site"){
        $pageSearch="";
    }
    else{
        $pageSearch= $pathToSiteDirectories->languageDirectory.'pesquisando-no-site/';
    }
    ?>
    <form action="<?php echo $pageSearch ?>" method="GET" class="form-search" enctype="application/x-www-form-urlencoded">
        <input type="search" id="input-search" minlength="6" name="key-words">
        <button type="submit">
            <span>&rarr;</span>
        </button>
    </form>
    <div class="links-fast-results">
        <nav class="links-list-results">
            <header>
                <h5>
                Resultados rápidos
                </h5>
            </header>
            <ul class="links-list-results-message">
                <li>
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
                    <strong>Artigos</strong>
                </li>
                <li>
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
                    <strong>Páginas importante</strong>
                </li>
                <li>
                    <div class="icon-warnings-in-html">
                        <div>
                            <span>
                                !
                            </span>
                        </div>
                    </div>
                    <strong>Avisos</strong>
                </li>
            </ul>
            
            <div class="links-founds-list">
                <div class="links-founds-list-container">
                </div>
                <strong class="links-founds-list-message">
                    <span>Insira pelo menos 6 caracteres no campo de pesquisa</span> 
                    <span>
                        Carregando links rápidos...
                        <br>
                        Se estiver demorando muito, clique no botão abaixo do campo de pesquisa.
                    </span> 
                    <span>Não houve resultados. Clique no botão abaixo do campo de pesquisa para uma pesquisa avançada.</span> 
                    <span>
                    Para uma pesquisa avançada, clique no botão abaixo do campo de pesquisa.
                    </span>
                </strong>
            </div>
        </nav>
    </div>
</div>