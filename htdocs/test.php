<?php
// Proline row 1 ("03 5/0","179","220","400","6000","1,45")







require 'inc.php';





try
{
    $init = new Base(null);
    echo $init->createPDF('sdd', 'test.pdf');
}
catch (Exception $e)
{
    exit($e->getMessage());
}


exit;

$artnr      = '03 5/0';
$width      = 179;
$wpm_nom    = 220;
$min_lenght = 400;
$max_lenght = 6000;
$n_koef     = 1.45;

$field = array();
$field[1] = 85;     //Flow?
$field[2] = 75;     //Return?
$field[3] = 20;     //Room?
$field[4] = 125;    //Height?
$field[5] = 1000;   //Output?
$field[6] = 3800;   //Length?


$switch = $field[4]; //Which field?
if ($switch <= 100)
    $height_fact = 1;
else if ($switch <= 125)
    $height_fact = 1.1;
else if ($switch <= 150)
    $height_fact = 1.2;
else if ($switch <= 200)
    $height_fact = 1.3;
else
    $height_fact = 1; //Else what?
/*
switch field[6]:
upto 100: 1
upto 125: 1,1
upto 150: 1,2
upto 200: 1,3
case 300: 0,2
*/


//the wpm formula contains some calculations with constants (75 - 65) etc. Why is that?
$wpm = floor( $wpm_nom * pow(($field[1] - $field[2]) / (log(($field[1] - $field[3]) / ($field[2] - $field[3]))) / ((75 - 65) / log((75 - 20) / (65 - 20))), $n_koef) );
//{wpm_nom} * ((((field[1]-field[2])/LN((field[1]-field[3])/(field[2]-field[3])))/((75-65)/LN((75-20)/(65-20))))^{n_koef})

$watt = ceil( ($field[6] / 1000) * $height_fact * $wpm );
//field[5] * formula[height_fact]   * formula[wpm]

$length = round(( $field[5] * $height_fact ) / $wpm, 2);
//(field[4] * formula[height_fact]  )/formula[wpm]

echo '$wpm: ' . $wpm . '<br>';
echo '$watt: ' . $watt . '<br>';
echo '$length: ' . $length . '<br>';