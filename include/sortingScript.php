<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tobias
 * Date: 28.10.2015
 * Time: 17:07
 */
$arr=array();
foreach($xml->spiel as $aHighscore)
{
    $arr[]=$aHighscore;
}

usort($arr,function($a,$b)
{
    return $b->score - $a->score; // Absteigend nach Score
    #return $a->score - $b->score; // Aufsteigend nach Score
});

$xml=simplexml_load_string(<<<XML
<?xml version="1.0"?>
<highscore>
</highscore>
XML
);

foreach($arr as $aHighscore)
{
    $sorting = $xml->addChild($aHighscore->getName());
    $sorting->addChild($aHighscore->id->getName(), (string)$aHighscore->id);
    $sorting->addChild($aHighscore->name->getName(), (string)$aHighscore->name);
    $sorting->addChild($aHighscore->score->getName(), (string)$aHighscore->score);
}
?>