<?php


$artnr      = '03 5/0';
$width      = 179;
$wpm_nom    = 220;
$min_lenght = 400;
$max_lenght = 6000;
$n_koef     = 1.45;

$field = array();
$field[1] = 90;     //Watt?
$field[2] = 75;     //Return?
$field[3] = 25;     //Room?
$field[4] = 125;    //Height?
$field[5] = 2000;   //Output?
$field[6] = 4500;   //Length?


$switch = $field[6]; //Which field?
if ($switch < 100)
    $height_fact = 1;
else if ($switch < 125)
    $height_fact = 1.1;
else if ($switch < 150)
    $height_fact = 1.2;
else if ($switch < 200)
    $height_fact = 1.3;
else if ($switch == 300)
    $height_fact = 0.2;
else
    $height_fact = 0; //Else what?
/*
switch field[6]:
upto 100: 1
upto 125: 1,1
upto 150: 1,2
upto 200: 1,3
case 300: 0,2
*/

//the wpm formula contains some calculations with constants (75 - 65) etc. Why is that?
$wpm = $wpm_nom * pow(($field[1] - $field[2]) / (log(($field[1] - $field[3]) / ($field[2] - $field[3]))) / ((75 - 65) / log((75 - 20) / (65 - 20))), $n_koef);
//{wpm_nom} * ((((field[1]-field[2])/LN((field[1]-field[3])/(field[2]-field[3])))/((75-65)/LN((75-20)/(65-20))))^{n_koef})

$watt = $field[5] * $height_fact * $wpm;
//field[5] * formula[height_fact]   * formula[wpm]

$length = ( $field[4] * $height_fact ) / $wpm;
//(field[4] * formula[height_fact]  )/formula[wpm]

echo '$wpm: ' . $wpm . '<br>';
echo '$watt: ' . $watt . '<br>';
echo '$length: ' . $length . '<br>';