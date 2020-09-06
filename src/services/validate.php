<?php

function validateName(string $name) : bool {

    if(empty($name)) {

        errorMessage("O nome não pode ser vazio! Tente novamente =)");
        header("Location: form.php");
        return false;
        }
        
    else if(strlen($name) < 3 || strlen($name) >= 40) {
        
        errorMessage("O nome deve conter no mínimo 3 caracteres e no máximo 40");
        header("Location: form.php");
        return false;
        }
        
return true;

}

function validateAge($age) {

    if(!is_numeric($age)) {

        errorMessage("Informe um número para o campo idade");
        header("Location: form.php");
        return false;
        
        }

        return true;

}

