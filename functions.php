<?php
function generatePassword()
{
    $characters = [
        ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"],
        ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"],
        ["`", "!", '"', "?", "$", "?", "%", "^", "&", "*", "(", ")", "_", "-", "+", "=", "{", "[", "}", "]", ":", ";", "@", "'", "~", "#", "|", "\\", "<", ">", ".", "?", "/"]
    ];
    $which_characters_explode = explode(",", $_GET["whichCharacters"]);
    $characters_allowed = [];
    for ($i = 0; $i < sizeof($which_characters_explode); $i++) {
        for ($index = 0; $index < sizeof($characters[$which_characters_explode[$i]]); $index++) {
            $characters_allowed[] = $characters[$which_characters_explode[$i]][$index];
        }
    }
    $repeat = isset($_GET["repeat"]) ? $_GET["repeat"] : false;
    $numbers_alredy_created = [];
    $puoi_pushare = true;
    $show_message = true;
    $password = "";
    for ($i = 0; $i < $_GET["length"]; $i++) {
        $randomNumber = rand(0, (sizeof($characters_allowed) - 1));
        if ($repeat == true) {
            if ($_GET["length"] <= sizeof($characters_allowed)) {
                for ($index = 0; $index < sizeof($numbers_alredy_created); $index++) {
                    if ($randomNumber == $numbers_alredy_created[$index]) {
                        $puoi_pushare = false;
                        $i--;
                        break;
                    } else {
                        $puoi_pushare = true;
                    }
                }
                if ($puoi_pushare == true) {
                    $numbers_alredy_created[] = $randomNumber;
                    $password = $password . $characters_allowed[$randomNumber];
                }
            } else {
                $show_message = false;
                echo "Inserisci una lunghezza minore per la tua password";
                break;
            }
        } else {
            $password = $password . $characters_allowed[$randomNumber];
        }
    }
    if ($show_message == true) {
        echo "La tua nuova password è <strong>" . $password . "</strong>";
    }
}
