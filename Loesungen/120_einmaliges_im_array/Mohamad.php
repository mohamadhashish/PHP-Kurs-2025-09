<?php

/*
 * Einmaliges im Array
 *
 * Schreibe ein Programm, das ein Array mit neun Zahlen befüllt.
 * Dabei sollen vier Zahlen doppelt vorkommen
 * und eine Zahl nur einmal.
 *
 * Schreibe dann ein Programm, das aus diesem Array die Zahl findet,
 * die nur einmal vorkommt.
 */

$zahlen = [5, 8, 4, 5, 8, 9, 4, 9, 3];

$haufigkeit =array_count_values($zahlen);

foreach ($haufigkeit as $zahl => $anzahl) {
    if ($anzahl === 1) {
        echo "Die einmalige Zahl ist: $zahl\n";
    }
}