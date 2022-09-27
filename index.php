<?php

$path="./texte/pcmain.htm";
if(isset($_GET['test'])){
  if($_GET['test']=='review'){
    $path= './texte/bestellungreview.html';
}  
}


//check if user clicked on link and set the path according to the link's value
if(isset($_GET['rechts'])){
    //get the value of the link user clicked on
    $page=$_GET['rechts'];
    
    //check which link was clicked
    switch ($page) {
    //    case "home":
    //        $path='./texte/pcmain.htm';
    //        break;
        case "gehaeuse":
            $path='./texte/gehaeuse.htm';
            break;
        case "monitor":
            $path='./texte/monitor.htm';
            break;
        case "drucker":
            $path='./texte/drucker.htm';
            break;
        case "bestellung":
           $path='./texte/bestellung2.html';
           break;


        //default case is also home 
        default:
             $path='./texte/pcmain.htm';
            break;
}
    
}


if(array_key_exists('submit', $_POST)){
    $name=$_POST['name'];
    $street=$_POST['street'];
    $date=$_POST['date'];
    $surname=$_POST['surname'];
    $postal=$_POST['postal'];
    $mail =$_POST['mail'];
    $customer=$_POST['customer-type'];
    $message=$_POST['message'];
    if(isset ($_POST['newsletter'])){
        $newsletter=$_POST['newsletter'];

    }
    $path = './texte/bestellungreview.html' ;
    
}





require_once './gui.php';
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

