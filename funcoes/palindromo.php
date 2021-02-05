<div class="titulo">Desafio Palindromo</div>

<form action="#" method="post">
    <div>
        <label for="caixa">Informe o nome:</label>
        <input type="text" name="caixa">
    </div>
    <button>Verificar</button>
</form>


<?php 
// Whith loop for
function palindrome($word){
    $lastindex = strlen($word) - 1;
    for($i = 0; $i <= $lastindex; $i++){
        if($word[$i] !== $word[$lastindex - $i]){
            return 'Not Palindrome';
        }
    }
    return 'Yes, Palindrome';
}

echo palindrome($_POST['caixa']) . '<br>';

// function that reverses the word

/*function palindromeSimple ($word){
    return $word === strrev($word) ? 'Yes': 'No';
}

echo palindrome($_POST['caixa']) . '<br>';


//Using If and Else
// PHP code to check for Palindrome string in PHP 
// Using strrev() 

$caixa = ($_POST['caixa']);

function Palindrome($string){   
    if (strrev($string) == $string){   
        return 1;   
    } 
    else{ 
        return 0; 
    } 
}   
  
// Driver Code 
$original = $caixa;  
if(Palindrome($original)){   
    echo "Palindrome";   
}  
else {   
echo "Not a Palindrome";   
} */

?>   