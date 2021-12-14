<?php
    $date= new DateTime("2020-01-01");
    echo "Evaluates whether the current day is Monday <br>";
    if(date('l')=="monday"){
        echo "We are on Monday";
    }else{
        echo "We aren't on Monday";
    }

    echo "<hr>";
    echo "Evaluates whether the current month is October<br>";
    if(date('m')=="October"){
        echo "We are on October";
    }else{
        echo "We aren't on October";
    }

    echo "<hr>";
    echo "Current minutes<br>";
    if (date('i')<10){
        echo "The current minute is less than 10";
    }else if (date('i')>15){
        echo "The current minute is more than 15";
    }else {
        echo "Does not meet any conditions";
    }

        echo "<hr>";
        echo "Week days<br>";
        switch (date('l')) {
            case 'Monday':
                echo "We are on Monday";
                break;
            case 'Tuesday':
                    echo "We are on Tuesday";
                    break;
            case 'Wednesday':
                        echo "We are on Wednesday";
                        break;
            case 'Thursday':
                            echo "We are on Thursday";
                            break;
            case 'Friday':
                                echo "We are on Friday";
                                break;
            default:
                echo "We are on Weekend!!";
                break;
        }
?>