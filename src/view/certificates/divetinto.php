<?php
$img = "assets/images/logo_diveintophp.png";
$student = utf8_decode($student);
$course = utf8_decode($course);
$body = <<<HTML
<div style="text-align: center; background-color: #8892BF; padding: 20px; width: 100%; height: 100%;">
    <img src="$img">
    <p style="font-size: 1.5em">
        Dive Into PHP project hereby certify that<br><br>
        <strong>$student</strong><br><br>
        successfully completed the workshop<br><br>
        <em>"$course"</em><br><br>
        on 21 August 2014<br><br>

    </p>
</div>
HTML;
?>