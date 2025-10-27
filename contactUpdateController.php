<?php
    require_once 'model/ContactDAO.php';

    //************************
    //*  Contoller Template  *
    //************************
    showErrors(1);  //1 - Turn on Error Display

    $method=$_SERVER['REQUEST_METHOD'];
    //* Process HTTP GET Request
    if($method=='GET'){
        $contactID = $_GET['contactID'];
        $contactDAO = new ContactDAO();
        $contact = $contactDAO->updateContact($contactID);

        include "views/contactUpdate-view.php";


    }
    
    //* Process HTTP POST Request
    if($method=='POST'){
        $contactID = $_POST['contactID'];
        $contactDAO = new ContactDAO();
        $contact = $contactDAO->updateContact($contactID);
        header("Location: contactListController.php");
        exit;


    }
   

    function showErrors($debug){
        if($debug==1){
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }
    }
?>