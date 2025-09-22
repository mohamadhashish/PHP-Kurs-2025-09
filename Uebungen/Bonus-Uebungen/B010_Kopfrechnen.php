<?php

/*
 * Kopfrechnen
 *
 * Schreibe ein Programm, das dem Benutzer fünf Rechenaufgaben stellt.
 *
 * Welche Operatoren (+, -, *, %, /, **) jeweils benutzt werden,
 * soll per Zufall ermittelt werden.
 * Jede Zahl und jedes Ergebnis der Rechenaufgaben muss eine ganze,
 * positive Zahl unter hundert sein.
 *
 * Wenn der Benutzer seine Ergebnisse absendet,
 * soll ausgegeben werden, wie viele Ergebnisse richtig waren
 * und wie lange der Benutzer gebraucht hat.
 */

session_start ();

// Liste der möglichen Operatoren
$operatores  ['+' , '-' , '*' , '%' , '**'];

// Funktion: Aufgabe Operatoren
function creat_Task ($operatores) {
    do {
        $a = rand(1, 99);
        $b = rand(1, 99);
        $op = $operatores[array_rand($operatores)];
        $expr = "$a $op $b";

        // Ergebnis berechnen
        try {
            $res = eval("retutn ($expr);");
        } catch (Throwable $e) {
            $res = -1;
        }
    } while (!is_int($res) || $res < 0 || $res > 99); // Nur gültige Aufgaben
}

// Wenn noch keine Aufgaben vorhanden -> neu erzeugen
