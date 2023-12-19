<?php
function generatePassword()
{
    $characters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "`", "!", '"', "?", "$", "?", "%", "^", "&", "*", "(", ")", "_", "-", "+", "=", "{", "[", "}", "]", ":", ";", "@", "'", "~", "#", "|", "\\", "<", ">", ".", "?", "/"];
    $password = "";
    for ($i = 0; $i < $_GET["length"]; $i++) {
        $randomNumber = rand(0, (sizeof($characters) - 1));
        $password = $password . $characters[$randomNumber];
    }
    echo "La tua nuova password è <strong>" . $password . "</strong>";
}
