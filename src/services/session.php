<?php

session_start();


function successMessage(string $success) : void {

    $_SESSION['success'] = $success;
}

function getSuccessMessage() : ?string {

    if(isset($_SESSION['success'])) {

        return $_SESSION['success'];

    }

    return null;
}

function removeSuccess() : void {

    if(isset($_SESSION['success'])) {
        
        unset($_SESSION['success']);
    } 

}

function errorMessage(string $error) : void {

    $_SESSION['error'] = $error;
}

function getErrorMessage() : ?string {

    if(isset($_SESSION['error'])) {

        return $_SESSION['error'];

    }

    return null;
}

function removeError() : void {

    if(isset($_SESSION['error'])) {

        unset($_SESSION['error']);
    }
}