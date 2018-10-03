<?php
$dictionnaire = range('a', 'z');

$input = "salut";
$input = strtolower($input);

$input_tab = str_split($input);

//var_dump($input_tab);

for ($i = 0; $i < count($input_tab); $i++){
    $lettre = $input_tab[$i];
    if ($lettre == " "){
        echo $lettre;
    } else {
        $index = array_search($lettre, $dictionnaire);
        $index = $index + $i + 1;
        if ($index > 25){
            $index = $index%25;
        }
        echo $dictionnaire[$index];
    }
}

echo "<br>";

$input2 = "bnhcftkzn";
$input_tab2 = str_split($input2);

for ($i = 0; $i < count($input_tab2); $i++){
    $lettre = $input_tab2[$i];
    if ($lettre == " "){
        echo $lettre;
    } else {
        $index = array_search($lettre, $dictionnaire);
        $index = $index - $i - 1;
        if ($index < 0){
            $index = $index+25;
        }
        echo $dictionnaire[$index];
    }
}

