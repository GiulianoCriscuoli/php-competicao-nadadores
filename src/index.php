<?php

include "services/session.php";
include "services/validate.php";
include "services/categories.php";

$name = filter_input(INPUT_POST,"name");
$age = filter_input(INPUT_POST, "age");


defineCategories($name, $age);

header("Location: form.php");