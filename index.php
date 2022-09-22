<?php

$path="./texte/pcmain.htm";
//check if user clicked on link and set the path according to the link's value
if(isset($_GET['rechts'])){
    //get the value of the link user clicked on
    $page=$_GET['rechts'];
    
    //check which link was clicked
    switch ($page) {
    case "home":
        $path='./texte/pcmain.htm';
        break;
    case "gehaeuse":
        $path='./texte/gehaeuse.htm';
        break;
    case "monitor":
        $path='./texte/monitor.htm';
        break;
    case "drucker":
        $path='./texte/drucker.htm';
        break;
    
    case "drucker":
        $path='./texte/drucker.htm';
        break;
    
    case "bestellung":
       $path='./texte/bestellung2.html';
       break;
    

    default:
         $path='./texte/pcmain.htm';
        break;
}
    
}








require_once './gui.php';
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

