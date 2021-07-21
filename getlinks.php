<?php
    $str = $_GET['str'];
    $hint = "";
    $xmldoc = new DOMDocument();
    $xmldoc->load("links.xml");

    $links = $xmldoc->getElementsByTagName("link");

    for ($i=0; $i < $links->count(); $i++) { 

        $title = $links->item($i)->getElementsByTagName("title");
        $url = $links->item($i)->getElementsByTagName("url");

        if(stristr($title->item(0)->nodeValue,$str)){

            if($hint == ""){
                $hint = "<a href='". $url->item(0)->nodeValue. "' target='_black'> ". $title->item(0)->nodeValue. "</a>";
            }else{
                $hint = $hint."</br><a href='". $url->item(0)->nodeValue. "' target='_black'> ". $title->item(0)->nodeValue. "</a>";
            }    
        }

    }

    if($hint == ""){
        echo "No response...";
    }else{
        echo $hint;
    }
   
?>