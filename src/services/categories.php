<?php


function defineCategories( string $name, $age) : ?string {

    $categories = [];
    $categories[] = 'Infantil';
    $categories[] = 'Adolescente';
    $categories[] = 'Adulto';

    if(validateName($name) && validateAge($age)) {
        

    if($age >= 6 && $age <= 12) {

        for($i = 0; $i < sizeof($categories); $i++) {
    
            if($categories[$i] === 'Infantil') {
    
                successMessage("O nadador(a) ".ucfirst($name)." compete na categoria: ".$categories[$i]); 
                header("Location: form.php");
                return null;
            }
        }
    
    } else if($age >= 13 && $age <= 17) {
    
        for($i = 0; $i < sizeof($categories); $i++) {
    
            if($categories[$i] === 'Adolescente') {
    
                successMessage("O nadador(a) ".ucfirst($name)." compete na categoria: ".$categories[$i]);
                header("Location: form.php");
                return null;
            }
        }
    
    } else {
    
        for($i = 0; $i < sizeof($categories); $i++) {
    
            if($categories[$i] === 'Adulto') {
    
                successMessage("O nadador(a) ".ucfirst($name)." compete na categoria: ".$categories[$i]);
                header("Location: form.php");
                return null;
            }   
        }
    }

} else {

   
    return getErrorMessage();
}

}
