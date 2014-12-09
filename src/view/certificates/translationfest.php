<?php
$img = "assets/images/back_translationfest.jpg";
$student = utf8_decode($student);
$course = utf8_decode($course);

$body = <<<HTML
<div style="text-align: center; padding-top: 150px; width: 100%; height: 100%; background-image: url('$img'); background-size: 100%; font-family: verdana, arial, 'Bitstream Vera Sans', helvetica, sans-serif; font-size: 1.2em; line-height: 2em">
    <p>
        O Grupo de Usu&aacute;rios de PHP de S&atilde;o Carlos - PHPSanca<br>
        confere o presente certificado a <strong>$student</strong><br>
        por sua participa&ccedil;&atilde;o no<strong>$course</strong> realizado no dia<br>
        13 de Dezembro de 2015,na Aptor Software em<br>
        S&atilde;o Carlos - SP, com carga hor&aacute;ria de 7 horas.
    </p>
    <div style="width: 100%; margin-top: 120px;">
        <div style="border-top: solid 1px #000; width: 40%; margin-left: 50px; float: left">Bruno Ricardo Siqueira</div>
        <div style="border-top: solid 1px #000; width: 40%; margin-right: 50px; float: right">Denis Oliveira</div>
    </div>

</div>
HTML;
?>