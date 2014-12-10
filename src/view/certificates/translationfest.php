<?php
$img       = "assets/images/back_translationfest.jpg";
$student   = utf8_decode($student);
$course    = utf8_decode($course);
$usergroup = utf8_decode($usergroup);
$city      = utf8_decode($city);
$place     = utf8_decode($place);
$organizerOne = utf8_decode($organizerOne);
$organizerTwo = utf8_decode($organizerTwo);

$body = <<<HTML
<div style="text-align: center; padding-top: 150px; width: 100%; height: 100%; background-image: url('$img'); background-size: 100%; font-family: verdana, arial, 'Bitstream Vera Sans', helvetica, sans-serif; font-size: 1.2em; line-height: 2em">
    <p>
        O $usergroup<br>
        confere o presente certificado a <strong>$student</strong><br>
        por sua participa&ccedil;&atilde;o no&nbsp;<strong>$course</strong> realizado no dia<br>
        13 de Dezembro de 2014,&nbsp;na $place em<br>
        $city, com carga hor&aacute;ria de 7 horas.
    </p>
    <div style="width: 100%; margin-top: 120px;">
        <div style="border-top: solid 1px #000; width: 40%; margin-left: 50px; float: left">$organizerOne</div>
        <div style="border-top: solid 1px #000; width: 40%; margin-right: 50px; float: right">$organizerTwo</div>
    </div>

</div>
HTML;
?>