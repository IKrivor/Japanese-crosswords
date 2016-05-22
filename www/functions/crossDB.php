<?php
$mysqli = false;

require_once "connectDB.php";

function getCross($limit, $id){
    global $mysqli;
    connectDB();
    if($id) $where = "WHERE `id` = ".$id;
    $result = $mysqli->query("SELECT * FROM `crosswords` $where LIMIT $limit");
    closeDB();
    if(!$id) return resultToArray($result);
    else return $result->fetch_assoc();
}

function resultToArray($result){
    $array = array();
    while (($row = $result->fetch_assoc()) != false)
        $array[] = $row;
    return $array;
}
?>