<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'bookshop');

if(!$connect){
    die("error connect");
}