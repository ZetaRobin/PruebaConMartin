<?php

function conectar(){
    $con = mysqli_connect("localhost","root","","sistema");
    $con->set_charset("utf8");
    return $con;
}
