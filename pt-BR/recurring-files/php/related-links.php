<?php
   
        $pathFunctions=$pathToSiteDirectories->rootDirectory."php-standard/";
        include_once($pathFunctions."remove-accents-string.php");
        include_once($pathFunctions."get-page-related-string.php");
        include_once($pathFunctions."simple-function.php");
       
        $fileContent=file_get_contents("./index.php");
        $tag_regex = '/<title[^>]*>(.*?)<\\/title>/si';
        preg_match_all($tag_regex,
        $fileContent,
        $title);
       // $sectionDirectoryName=" ".explode("/", $_SERVER['PHP_SELF'])[3];

        $searchString=$title[1][0];
        
        
        $jsonFile=file_get_contents($pathToSiteDirectories->languageDirectory."pesquisando-no-site/data-for-search/FlyNeves-data.json");
        $maxLinkList =8;
        $counting=0;
        $linksFound= getPageRelatedString($searchString, $jsonFile, $maxLinkList);
        
        $linksFound=$linksFound;
        $length=length($linksFound);
        $linksFoundListHTML=[];
        $countingPage=0;
        $maxList=$maxLinkList;
        while ($counting++<$maxList) {
            $get=$linksFound[$counting][0];
            $type=$get["documentContentType"];
            $title=$get["title"];
            $description=$get["description"];
            $urlEncoded=$get["url"];
            $removeDomain=explode("/", $urlEncoded);
            
            $urlEncoded=array_splice($removeDomain, 3 ,count($removeDomain));
            $urlEncoded=$pathToSiteDirectories->rootDirectory.implode("/", $urlEncoded);

            $linksFoundListHTML[length($linksFoundListHTML)]="
            <li>
            <a href=\""."$urlEncoded"."\">
            ".$title."
            </a>
            </li>
            ";
                    }
        $linksFoundListHTML=implode("", $linksFoundListHTML);
    ?>
    <aside class="important-content-section-aside">
        <section>
            <header>
                <h2>
                    Links relacionados
                </h2>
            </header>
            <nav>
                <ul>
                    <?php
                    echo $linksFoundListHTML;
                    ?>
                </ul>
            </nav>
        </section>
    </aside>