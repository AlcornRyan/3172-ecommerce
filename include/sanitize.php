<?php

 function validateData($data) {
    
    $returnValue = trim($data); // Removes whitespaces
	$returnValue = stripslashes($returnValue); // Removes slashes
	$returnValue = htmlspecialchars($returnValue); // Changes special characters into HTML entities
    
    return $returnValue;

}

function validateProductData($data) {
    
	$returnValue = stripslashes($data); // Removes slashes
	$returnValue = htmlspecialchars($returnValue); // Changes special characters into HTML entities
    
    return $returnValue;

}

?>