<?php
require_once("functions.php");

var_dump($_POST);
if ($_POST){
    $name=$_POST['frame'];
    if (empty($name)){
        echo "</br>Nom vide";
    } else {
        echo"</br>Mon nom est :". $name;
    }


$nameLengthIsValid = nameLengthIsValid($_POST['frame']);


echo'</br>';
var_dump($nameLengthIsValid);
if(!$nameLengthIsValid['isValid']){

} else {

}
}