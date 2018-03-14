<?php

function task4($url, $params)
{
    
    $content = file_get_contents($url);

    if (empty($content)) {
        return null;
    }

    $json = json_decode($content, true);

    if (empty($json["query"]["pages"])) {
        return null;
    }

   
    $result = array_shift($json["query"]["pages"]);

    foreach ($params as $value) {
        echo $result[$value] . "\n";
    }
}

task4(
    "https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json",
    ["title", "pageid"]
);


?>