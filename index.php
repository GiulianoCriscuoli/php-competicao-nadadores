<?php

$categories = [];
$categories[] = 'Infantil';
$categories[] = 'Adolescente';
$categories[] = 'Adulto';

$name = 'Giuliano';
$age = 16;


if($age >= 6 && $age <= 12) {

    for($i = 0; $i <= count($categories); $i++) {

        if($categories[$i] === 'Infantil') {

            echo "O nadador ".$name." compete na categoria: ".$categories[$i];
        }
    }

} else if($age >= 13 && $age <= 18) {

    for($i = 0; $i <= count($categories); $i++) {

        if($categories[$i] === 'Adolescente') {

            echo "O nadador ".$name." compete na categoria: ".$categories[$i];

        }
    }

} else {

    for($i = 0; $i <= count($categories); $i++) {

        if($categories[$i] === 'Adulto') {

            echo "O nadador ".$name." compete na categoria: ".$categories[$i];
        }
    }
}