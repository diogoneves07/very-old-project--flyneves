<?php

function getPageRelatedString($string, $jsonFile, $maxLinkList){
    $flyNeves_ContentToFetch=json_decode($jsonFile,true);
      function nevesDevSearching($string, $text) {
        $text= removeAccentsString(removeMultipleSpaces(tinyName($text)));
        $string= removeAccentsString(removeMultipleSpaces(tinyName($string)));
        $countingWords=0;
        $result=$string==$text?100:0;
        $words=removeKeyEmpty(split(" ", $string));
        while ($countingWords<length($words)) {
       
          $word=removeSpace($words[$countingWords]);
          if($word==""){
            $countingWords++;
              continue;
          }
          
          $text=split(" ".$word." ", $text);
          $result+=(length($text)-1)*200;
          $text=join(" ", $text);
          $countingWords++;
        }
        $counting=0;
        $text=removeKeyEmpty(split(" ", $text));
        //string=string.split("");
        while ($counting<length($text)) {
    
            $word=removeSpace($text[$counting]);
            $countingWords=0;
    
            
          while ($countingWords<length($words)) {
    
           //echo length($word)."<br>".$word."<br>";
           $searchWord=removeSpace($words[$countingWords]);
    
          $percent=100/length($searchWord);
          $identicalChar=0;
          $countingChar=0;
          $resultPercent;
          
          $splitWord=split("", $word);
          
          if((100/length($searchWord))*length($splitWord)>50){
          while ($countingChar<length($splitWord)) {
            if($countingChar<length($searchWord) && $searchWord[$countingChar]==$splitWord[$countingChar]){
              $identicalChar++;
            }
            $countingChar++;
          }
          $resultPercent=$identicalChar*$percent;
          if($resultPercent>=60){
            $result+=$resultPercent;
            ///console.log(word.join(""));
            
          }
        }
        $countingWords++;
      }
          $counting++;
        }
        return $result;
        
    
      }  
    
        $counting=0;
        $returnSearch=[];
        while ($counting<length($flyNeves_ContentToFetch)) {
            $get=$flyNeves_ContentToFetch[$counting];
            if(removeSpace($get["title"])=="" || removeSpace($get["description"])==""){
                $counting++;
                continue;
            }
            $returnSearch[length($returnSearch)]=[
                $counting,
                nevesDevSearching($string, $get["title"])+
                nevesDevSearching($string, $get["description"])+
                nevesDevSearching($string, $get["keywords"])+
                nevesDevSearching($string, $get["h1"])+
                nevesDevSearching($string, $get["h2"])+
                nevesDevSearching($string, $get["h3"])+
                nevesDevSearching($string, $get["mainText"])
            ];
            $counting++;
        }
        //print_r($returnSearch);
    $counting=0;
    $linksFound=[];
    
    while ($counting<length($returnSearch)) {
        $get=$returnSearch[$counting];
        $positionArray=$get[0];
        $searchLevel=$get[1];
        $linksFoundLength=length($linksFound);
        $found=false;
        if($searchLevel>0 && $linksFoundLength>0){
        $countingAgain=0;
        while ($countingAgain<length($linksFound)) {
            $getAgain=$linksFound[$countingAgain];
            
            if(!$getAgain){
              $countingAgain++;
              continue;
            }

            if(isset($getAgain[1]) && $searchLevel>$getAgain[1]){
            array_splice($linksFound, $countingAgain, 0, [[$flyNeves_ContentToFetch[$positionArray], $searchLevel]]);
            $found=true;
            break;
            }
            $countingAgain++;
        }
        }
        if($searchLevel>0 && $found==false){
        $linksFound[$linksFoundLength]=[$flyNeves_ContentToFetch[$positionArray], $searchLevel];
        }
        $counting++;
    }

    return $linksFound;
    }
?>