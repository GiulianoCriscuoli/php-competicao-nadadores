<?php
session_start();

$categories = [];
$categories[] = 'Infantil';
$categories[] = 'Adolescente';
$categories[] = 'Adulto';

$name = filter_input(INPUT_POST,"name");
$age = filter_input(INPUT_POST, "age");

if(empty($name)) {

    $_SESSION['error'] = "O nome não pode ser vazio! Tente novamente =)";
    header("Location: form.php");
    exit;
}

else if(strlen($name) < 3 || strlen($name) >= 40) {

    $_SESSION['error'] = "O nome deve conter no mínimo 3 caracteres e no máximo 40";
    header("Location: form.php");
    exit;
}

else if(!is_numeric($age)) {

    $_SESSION['error'] =  "Informe um número para o campo idade";
    header("Location: form.php");
    exit;

}

if($age >= 6 && $age <= 12) {

    for($i = 0; $i < sizeof($categories); $i++) {

        if($categories[$i] === 'Infantil') {

            $_SESSION['success'] =  "O nadador ".ucfirst($name)." compete na categoria: ".$categories[$i];
            header("Location: form.php");
            exit;
        }
    }

} else if($age >= 13 && $age <= 17) {

    for($i = 0; $i < sizeof($categories); $i++) {

        if($categories[$i] === 'Adolescente') {

            $_SESSION['success'] = "O nadador ".ucfirst($name)." compete na categoria: ".$categories[$i];
            header("Location: form.php");
            exit;
        }
    }

} else {

    for($i = 0; $i < sizeof($categories); $i++) {

        if($categories[$i] === 'Adulto') {

            $_SESSION['success'] =  "O nadador ".ucfirst($name)." compete na categoria: ".$categories[$i];
            header("Location: form.php");
            exit;
        }   
    }
}