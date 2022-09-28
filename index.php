<?php

$path="./texte/pcmain.htm";

//test for review page --remove after completion--
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

//checks if submit button on order page was pressed and assigns the inserted text and reroutes to review page
if(array_key_exists('submit', $_POST)){
    $name=$_POST['name'];
    $street=$_POST['street'];
    $date=$_POST['date'];
    $surname=$_POST['surname'];
    $postal=$_POST['postal'];
    $mail =$_POST['mail'];
    $customer=$_POST['customer-type'];
    //check if user wrote message and display row if yes
    if($_POST['message']!=""){
        $message=$_POST['message'];
        //$messageClass='show-message'; //unnecessary since empty class has same effect as styled show-message class
    }else{
        $messageClass='invis-message';
    }

    //check if newsletter box ticked and display message if yes
    if(isset ($_POST['newsletter'])){
        $newsletter="Vielen Dank, dass Sie sich für den Newsletter der PC und Zubehör GmbH entschieden haben.";
        //$class='subscribed'; //see show-message comment
    }else{
        $class='not-subscribed';
    }
    $path = './texte/bestellungreview.html' ;
    
}





require_once './gui.php';
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

