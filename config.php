<?php

$server = "localhost"
$user = "root"
$password = "helloworld"
$namadatabase = "erfan"

$mysqli = mysqli_connect($server, $user, $password, $namadatabase)

if (!$mysqli) {
    die("Gagal terhubung dengan sistem : ") . mysqli_connect());
}

?>