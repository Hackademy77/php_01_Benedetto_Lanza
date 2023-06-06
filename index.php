<!-- PHP - 01 - Concetti Base

installare PHP
rivedere la lezione
recap
il primo gruppo dei buddy deve scrivere la guida della prima lezione di PHP

Esercizi
Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array
Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
];

Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY66".

Pushate su Github chiamando la repository php_01_nome_cognome e inviate il link sul canale presente su discord
 
﻿ -->




<?php


//ESERCIZIO 1

// $array = [6, 13, 9, 8, 14, 23];

// $somma = 0;
// $contatore = 0;

// foreach ($array as $key => $number) {
//    if($number % 2 == 0){
//         $somma + $number;
//         $contatore++;
//    }

// }

// $media = $somma / $contatore;
// echo($media);


//ESERCIZIO 2

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
// $users = [
//   ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
//   ['name' => 'Emilio', 'surname' => 'Corona', 'gender' => 'M'],
//   ['name' => 'Nicola', 'surname' => 'Bongiovanni', 'gender' => 'M'],
//   ['name' => 'Carla', 'surname' => 'Delfine', 'gender' => 'F'],
//   ['name' => 'Mariasilvia', 'surname' => 'Giacalone', 'gender' => 'F'],
//   ['name' => 'Christian', 'surname' => 'Infurna', 'gender' => 'M'],
  
// ];

// foreach ($users as $key => $user) {
//   if ($user ['gender'] == 'M') {
//    echo "Buongiorno Sig. $user[name] $user[surname] \n";
    
//   }else{
//    echo "Buongiorno Sig.ra $user[name] $user[surname] \n";
//   }
// }


?>