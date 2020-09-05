<?php

$categories = [];
$categories[] = 'Infantil';
$categories[] = 'Adolescente';
$categories[] = 'Adulto';

$name = $_POST['name'];
$age = $_POST['age'];

if(empty($name)) {

    echo "O nome não pode ser vazio";
    return;
}

if(strlen($name) < 3 || strlen($name) >= 40) {

    echo "O nome deve conter no mínimo 3 caracteres e no máximo 40";
    return;
}

if(!is_numeric($age)) {

    echo "Informe um número para o campo idade";

}

if($age >= 6 && $age <= 12) {

    for($i = 0; $i < sizeof($categories); $i++) {

        if($categories[$i] === 'Infantil') {

            echo "O nadador ".$name." compete na categoria: ".$categories[$i];
        }
    }

} else if($age >= 13 && $age <= 17) {

    for($i = 0; $i < sizeof($categories); $i++) {

        if($categories[$i] === 'Adolescente') {

            echo "O nadador ".$name." compete na categoria: ".$categories[$i];

        }
    }

} else {

    for($i = 0; $i < sizeof($categories); $i++) {

        if($categories[$i] === 'Adulto') {

            echo "O nadador ".$name." compete na categoria: ".$categories[$i];
        }
    }
}