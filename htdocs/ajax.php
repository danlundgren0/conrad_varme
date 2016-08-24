<?php

require 'inc.php';


if (!$_POST)
{
    $_POST['db'] = 'proline';
    $_POST['flow'] = '75';
    $_POST['return'] = '65';
    $_POST['room'] = '20';
    $_POST['height'] = '125';
    $_POST['watt'] = '2000';
    $_POST['length'] = '4500';
}


try
{
    $init = new Init($_POST);
    echo $init->getView();
}
catch (Exception $e)
{
    exit($e->getMessage());
}




