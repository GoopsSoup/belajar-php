<?php
    $names = ["andhika", "dwi", "wiratmoko"];
    $age = [21, 17, 13];

    for ($i = 0;$i <= 10;$i++ ) {
        foreach ($names as $n) {
            if ($n == "andhika") {
                echo $n[0] . "<br>";
            }
        }
    }
?>