<?php
function getContent($tagName, $documentContent)
{
    $tagName = preg_quote($tagName);
    $tagRegex = '/<' . $tagName . '[^>]*>(.*?)<\\/' . $tagName . '>/si';
    preg_match_all($tagRegex, $documentContent, $matches);
    $counting = 0;
    $matches = $matches[0];
    while ($counting < count($matches)) {
        $matches[$counting] = strip_tags($matches[$counting]);
        $counting++;
    }
    return implode("", $matches);
}
function rewriteTitleTags($stringPage)
{
    $stringPage = str_replace("<h5", "<h6", $stringPage);
    $stringPage = str_replace("h5>", "h6>", $stringPage);
    $stringPage = str_replace("<h4", "<h5", $stringPage);
    $stringPage = str_replace("h4>", "h5>", $stringPage);
    $stringPage = str_replace("<h3", "<h4", $stringPage);
    $stringPage = str_replace("h3>", "h4>", $stringPage);
    $stringPage = str_replace("<h2", "<h3", $stringPage);
    $stringPage = str_replace("h2>", "h3>", $stringPage);
    $stringPage = str_replace("<h1", "<h2 class=\"subtitles-main\"", $stringPage);
    $stringPage = str_replace("h1>", "h2>", $stringPage);
    return $stringPage;
}
function addAnchor($stringPage)
{
    $text = removeMultipleSpaces(getContent("h1", $stringPage));
    $anchorText = stringForAttribute($text);
    $anchor = "<a class=\"anchor-of-content\" id=\"$anchorText\"></a>";
    $stringPage = str_replace("<h1", "$anchor<h1", $stringPage);
    return $stringPage;
}
function addArticle($stringPage)
{
    $hr = "<hr class=\"hr-hidden\">";
    return $hr . rewriteTitleTags($stringPage);
}


?>