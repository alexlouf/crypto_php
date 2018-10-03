<?php

function calcul($puissance, $step2, $random) {
    $p = 812;

    $g = 7;
    if ($step2 == true) {
        $resultat = pow($puissance, $random)%$p;

        return $resultat;

    } else {
        $resultat = pow($g,$puissance)%$p;

        return $resultat;
    }

}

function alice($step2 = false, $bob = 0, $random=0) {
    if ($step2 == true) {
        $key_priv_alice = calcul($bob, true, $random);
        return $key_priv_alice;
    } else {
        //$nombre_alice = $random;
        $step1 = calcul($random, false, $random);
        echo $step1;
        echo "<br>";
        return $step1;
    }

}

function bob($step2 = false, $alice = 0, $random=0) {
    if ($step2 == true) {
        $key_priv_bob = calcul($alice, true,$random);
        return $key_priv_bob;
    } else {
        //$nombre_bob = rand(1,10);
        $step1 = calcul($random, false, $random);
        echo $step1;
        return $step1;
    }

}

function echange(){
    $rand_alice =  rand(1,10);
    $rand_bob = rand(1,10);

    $step1_alice = alice(false,0,$rand_alice);
    $step1_bob = bob(false,0,$rand_bob);


    $alice = alice(true, $step1_bob, $rand_alice);
    $bob = bob(true, $step1_alice, $rand_bob);

    echo "<br>";
    echo "la clé privée de Alice est ".$alice;
    echo "<br>";
    echo "la clé privée de Bob est ".$bob;
}



echange();


