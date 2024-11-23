<?php

include_once("salir.php");

$key = isset($_POST['k']) ? ( !empty($_POST['k']) ? $_POST['k'] : salir("Empty k", "Warning","HTML") ) : salir("K Not Set", "Warning","HTML");
$data = isset($_POST['d']) ? ( !empty($_POST['d']) ? $_POST['d'] : salir("Empty d", "Warning","HTML") ) : salir("D not set", "Warning","HTML");
$action = isset($_POST['a']) ? ( !empty($_POST['a']) ? $_POST['a'] : salir("Empty a", "Warning","HTML") ) : salir("A not set", "Warning","HTML");

function item_add(){}
function item_delete(){}
function item_update(){}
function item_search(){}

?>