<?php
    $value = $_GET['artist'];
    $found = "";

    $xml = new DOMDocument();
    $xml->load("cd.xml");
    $nodes = $xml->getElementsByTagName("ARTIST");

    for ($i=0; $i < $nodes->count(); $i++) { 
        $node = $nodes->item($i);
        if($node->nodeValue == $value){
            $found = $node->parentNode;
        }
    }

    if($found != ""){
        $found = $found->childNodes;
        for($i=0; $i < $found->count(); $i++){
            if($found->item($i)->nodeType == 1){
                echo "<b>" . $found->item($i)->nodeName. ":</b> ";
                echo $found->item($i)->nodeValue;
                echo "<br>" ;
            }
        }
    }

?>