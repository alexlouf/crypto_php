<?php

function getPos($length, $start){
    $pos = [];
    $roue1 = [1,2,3];
    $roue2 = [1,2];
    $roue3 = [1,2,3,4,5];

    $position_init = str_split($start);

    for ($i = 0; $i < $length; $i++){
        $result =[$roue1[$i%3],$roue2[$i%2],$roue3[$i%5]];
        //var_dump(implode($result));
        array_push($pos, implode($result));
    }
    var_dump($pos);
    return $pos;

}

$dictionnaire = range('a', 'z');


$input = "salut";
$input = strtolower($input);


$input_tab = str_split($input);
$pos = getPos(count($input_tab), "111");
echo "<br>";

for ($i = 0; $i < count($input_tab); $i++){
    $lettre = $input_tab[$i];
    if ($lettre == " "){
        echo $lettre;
    } else {
        $index = array_search($lettre, $dictionnaire);
        $index = $index + $pos[$i];
        if ($index > 25){
            $index = $index%26;
        }
        echo $dictionnaire[$index];
    }
}

echo "<br>";

$input2 = "zomoa";
$input_tab2 = str_split($input2);

for ($i = 0; $i < count($input_tab2); $i++){
    $lettre = $input_tab2[$i];
    if ($lettre == " "){
        echo $lettre;
    } else {
        $index = array_search($lettre, $dictionnaire);
        $index = $index - $pos[$i];
        $index = $index%26;
        while ($index < 0){
            $index = $index+26;
        }
        echo $dictionnaire[$index];
    }
}
