<div class="search-container search">
    <header class="content-hidden-titles">
        <h4>
            <span>
            Search
            </span>
        </h4>
    </header> 
    <?php
    $pageSearch=explode("/", $_SERVER["PHP_SELF"]);
    if($pageSearch[count($pageSearch)-2]=="searching-the-site"){
        $pageSearch="";
    }
    else{
        $pageSearch= $pathToSiteDirectories->languageDirectory.'searching-the-site/';
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
                Quick results
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
                    <strong>Article</strong>
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
                    <strong>Important pages</strong>
                </li>
                <li>
                    <div class="icon-warnings-in-html">
                        <div>
                            <span>
                                !
                            </span>
                        </div>
                    </div>
                    <strong>Warnings</strong>
                </li>
            </ul>
            
            <div class="links-founds-list">
                <div class="links-founds-list-container">
                </div>
                <strong class="links-founds-list-message">
                    <span>Enter at least 6 characters in the search field.</span> 
                    <span>
                    Loading quick links ...
                        <br>
                        If it's taking too long, click the button below the search field.
                    </span> 
                    <span>There were no results. Click the button below the search field for an advanced search.</span> 
                    <span>
                    For an advanced search, click on the button below the search field.
                    </span>
                </strong>
            </div>
        </nav>
    </div>
</div>