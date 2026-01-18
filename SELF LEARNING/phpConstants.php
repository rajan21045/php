<?php

define("Name", "Hi, I Am Rajan Poudel");
echo Name;

function myTest(){
    define("Name2", "Hi, I Am Rajan Poudel");
}
myTest();
echo Name2;

const GREETING = "Welcome to Constants!";
echo GREETING;
?>