<?php
$db = new PDO("mysql:host=localhost;dbname=social","root","");
if (!isset($_GET["id"])) die("Parametr berilmadi");
$id = intval($_GET["id"]);
$res = $db->exec("DELETE FROM citizen1 WHERE id=$id");
if ($res !== false){
    header("Location: citizen.php");
}else{
    var_export($db->errorInfo());
}
?>