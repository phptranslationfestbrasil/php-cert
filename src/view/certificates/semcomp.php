<?php
$img = "assets/images/logo_semcomp.png";
$student = utf8_decode($student);
$course = utf8_decode($course);

$body = <<<HTML
<div style="text-align: center; background-color: #EEEEEE; padding: 20px; width: 100%; height: 100%;">
    <img src="$img">
    <p>
        Certificamos que<br><br>
        <strong>$student</strong><br><br>
        concluiu o minicurso<br><br>
        <em>"$course"</em><br><br>
        realizado na USP S&atilde;o Carlos - SP, de 18 a 22 de agosto de 2014.
    </p>
</div>
HTML;
?>