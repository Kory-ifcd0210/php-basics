<?php
echo "Date format Y-m-d <br>";
    $date= new DateTime("2020-01-01");
    echo $date-> format ("Y-m-d");

    echo "<hr>";
    echo "Today is ";
    $today = date('d-m-y');
    echo $today;

    echo "<hr>";
    echo "Current month is ";
    $month = date('n');
    echo $month;

    echo "<hr>";
    echo "Current time is ";
    $minutes = intval(date('i'));
    echo $minutes;
?>