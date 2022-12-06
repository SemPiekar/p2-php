<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    date_default_timezone_set("Europe/Amsterdam");

    $today = date("l d F Y ");
    echo "<p>Het is vandaag: $today</p>";

    $yearday = date("z") . "e";
    echo "<p>Vandaag is het de $yearday dag van het jaar</p>";

    $day = date("l");
    $daynumber = date("w") . "e";
    echo "<p>$day is de $daynumber dag van de week</p>";

    $month = date("F");
    $totaldays = date("j");
    echo "<p>de maand $month heeft in totaal $totaldays dagen</p>";

    $year = date("Y");
    $leapyearcheck = date("L");


    if ($leapyearcheck > 0) {
        print("Het jaar $year is een schrikkel jaar");
    } else {
        print("Het jaar $year is geen schrikkel jaar");
    }
    ?>
</body>

</html>