<?php

$categories = [];
$categories[] = 'Infantil';
$categories[] = 'Adolescente';
$categories[] = 'Adulto';

$name = $_POST['name'];
$age = $_POST['age'];


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