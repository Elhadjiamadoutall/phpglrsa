<?php
function fromJsonToArray (string $key=null):array{
    $json =file_get_contents(DB);
    $arrayData=json_decode ($json, true);
    return $key==null? $arrayData:$arrayData[$key];
}
function fromArrayToJson (string $key, array $newData){
    $arrayData=fromJsonToArray ();
    $arrayData[$key][] =$newData;
    $json=json_encode ($arrayData);
    file_put_contents( DB,$json); 
}
    
?>

