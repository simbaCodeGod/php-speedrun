<?php 

    #Syntax
    echo "Hello World";
    
    #Comments

    // Single line comment variation 1

    #Single line comment variation 2

    /* Multiline commment
     are like this */

    // Variables

    $variableOne = "this string";

    // Variable Scope

    #Local Scope
    #This is a variable declared within a function and can only be accessed in that function
    function LocalScope()
    {
        $localVar = 3;
    }

    # Global Scope
    # A variable with global scope can on be accessed outside a function

    $globalVar = 7;

    # Global keyword
    # the global keyword is used to access variables from within a function


    $x = 5;
    $y = 10;

    function myFunc()
    {
        global $x, $y;
        $y = $x + $y;
    }

    myFunc();
    echo $y;

    # Static keyword 


?>