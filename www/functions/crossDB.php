<?php
$mysqli = false;

function connectDB(){
    global $mysqli;
    $mysqli = new mysqli("localhost", "root", "", "jcross");
    $mysqli->query("SET NAMES 'utf-8'");
}

function closeDB(){
    global $mysqli;
    $mysqli->close();
}

function getCross(){
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM  `crosswords`");
    closeDB();
    return resultToArray($result);
}

function resultToArray($result){
    $array = array();
    while (($row = $result->fetch_assoc()) != false)
        $array[] = $row;
    return $array;
}
?>