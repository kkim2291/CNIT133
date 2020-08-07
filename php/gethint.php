<?php
// Array with names
$a[] = "Anna";
$a[] = "Alan";
$a[] = "Asa";
$a[] = "Brittany";
$a[] = "Boris";
$a[] = "Cinderella";
$a[] = "Cain";
$a[] = "Deimos";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Eyan";
$a[] = "Fiona";
$a[] = "Fynn";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kain";
$a[] = "Elsa";
$a[] = "Mervin";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Hans";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Sergio";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Tristan";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Paul";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
$a[] = "Zane";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>