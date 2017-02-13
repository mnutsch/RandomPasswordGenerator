<?php

/* * *****************************************************************************
 * File Name: one-time-password-generator.php
 * Author: mnutsch
 * Date Created: Feb 13, 2017[9:41:39 AM]
 * Description: This code generates a random value to be used as a one time password.
 * Notes: 
 * **************************************************************************** */


//==================================================================== BEGIN PHP


//variables
$minimumASCIIValue = 33;
$maximumASCIIValue = 126;
$generatedPassword = "";
$numberOfCharacters = 12;

//code
for($i = 0; $i < $numberOfCharacters; $i++)
{
    $generatedPassword = $generatedPassword . chr((rand($minimumASCIIValue,$maximumASCIIValue)));
}

//output
echo "The generated one-time password is " . $generatedPassword;


//====================================================================== END PHP
?>