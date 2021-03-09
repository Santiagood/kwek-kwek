<?php

    //Temperature
    function Temperature_run() {
        if (isset($_POST['cel'])) {
            $cel = $_POST['cel'];
            CelciusToFah($cel);
        }
    
        if (isset($_POST['fah'])) {
            $fah = $_POST['fah'];
            FahToCel($fah);
        }
    }

    function CelciusToFah($Cel) {
        $Fah = ($Cel * 9.0 / 5.0) + 32.0;
        echo "Fahrenheit: " . $Fah . " °F";
    }

    function FahToCel($Fah) {
        $Cel = ($Fah - 32.0) * 5.0 / 9.0;
        echo "Celcius: " . $Cel . " °C";
    }

    //BMI
    function BMI_run() {
        if (isset($_POST['Height']) && isset($_POST['Weight'])) {
            $height = $_POST['Height'];
            $weight = $_POST['Weight'];
            bmiCompute($weight, $height);
        } 
    }

    function bmiCompute($W, $H) {
        $W = $W * 1000.00;
        $BMI = $W / ($H * $H);
        echo "BMI: " . $BMI . " kg/m2";
    }
    
    //Distance
    function Distance_run() {
        // Miles per hour                                   
        if (isset($_POST['From_MilesPerHour_To_MilesPerHour'])) {
            $speed = $_POST['From_MilesPerHour_To_MilesPerHour'];
            MilesPerHourToMilesPerHour($speed);
        }

        if (isset($_POST['From_MilesPerHour_To_FootPerSecond'])) {
            $speed = $_POST['From_MilesPerHour_To_FootPerSecond'];
            MilesPerHourToFootPerSecond($speed);
        }

        if (isset($_POST['From_MilesPerHour_To_MeterPerSecond'])) {
            $speed = $_POST['From_MilesPerHour_To_MeterPerSecond'];
            MilesPerHourToMeterPerSecond($speed);
        }

        if (isset($_POST['From_MilesPerHour_To_KilometerPerHour'])) {
            $speed = $_POST['From_MilesPerHour_To_KilometerPerHour'];
            MilesPerHourToKilometerPerHour($speed);
        }

        // Foot Per Second                                 
        if (isset($_POST['From_FootPerSecond_To_MilesPerHour'])) {
            $speed = $_POST['From_FootPerSecond_To_MilesPerHour'];
            FootPerSecondToMilesPerHour($speed);
        }

        if (isset($_POST['From_FootPerSecond_To_FootPerSecond'])) {
            $speed = $_POST['From_FootPerSecond_To_FootPerSecond'];
            FootPerSecondToFootPerSecond($speed);
        }

        if (isset($_POST['From_FootPerSecond_To_MeterPerSecond'])) {
            $speed = $_POST['From_FootPerSecond_To_MeterPerSecond'];
            FootPerSecondToMeterPerSecond($speed);
        }

        if (isset($_POST['From_FootPerSecond_To_KilometerPerHour'])) {
            $speed = $_POST['From_FootPerSecond_To_KilometerPerHour'];
            FootPerSecondToKilometerPerHour($speed);
        }

        // Meter Per Second                                 
        if (isset($_POST['From_MeterPerSecond_To_MilesPerHour'])) {
            $speed = $_POST['From_MeterPerSecond_To_MilesPerHour'];
            MeterPerSecondToMilesPerHour($speed);
        }

        if (isset($_POST['From_MeterPerSecond_To_FootPerSecond'])) {
            $speed = $_POST['From_MeterPerSecond_To_FootPerSecond'];
            MeterPerSecondToFootPerSecond($speed);
        }

        if (isset($_POST['From_MeterPerSecond_To_MeterPerSecond'])) {
            $speed = $_POST['From_MeterPerSecond_To_MeterPerSecond'];
            MeterPerSecondToMeterPerSecond($speed);
        }

        if (isset($_POST['From_MeterPerSecond_To_KilometerPerHour'])) {
            $speed = $_POST['From_MeterPerSecond_To_KilometerPerHour'];
            MeterPerSecondToKilometerPerHour($speed);
        }

        // Kilometer Per Hour                                 
        if (isset($_POST['From_KilometerPerHour_To_MilesPerHour'])) {
            $speed = $_POST['From_KilometerPerHour_To_MilesPerHour'];
            KilometerPerHourToMilesPerHour($speed);
        }

        if (isset($_POST['From_KilometerPerHour_To_FootPerSecond'])) {
            $speed = $_POST['From_KilometerPerHour_To_FootPerSecond'];
            KilometerPerHourToFootPerSecond($speed);
        }

        if (isset($_POST['From_KilometerPerHour_To_MeterPerSecond'])) {
            $speed = $_POST['From_KilometerPerHour_To_MeterPerSecond'];
            KilometerPerHourToMeterPerSecond($speed);
        }

        if (isset($_POST['From_KilometerPerHour_To_KilometerPerHour'])) {
            $speed = $_POST['From_KilometerPerHour_To_KilometerPerHour'];
            KilometerPerHourToKilometerPerHour($speed);
        }
    }


    // ** Miles Per Hour**
    function MilesPerHourToKilometerPerHour($speed) {
        $speed = $speed * 1.609;
        echo $speed . " Kilometer per hour";
    }

    function MilesPerHourToMeterPerSecond($speed) {
        $speed = $speed / 2.237;
        echo $speed . " Meters per second";
    }

    function MilesPerHourToFootPerSecond($speed) {
        $speed = $speed * 1.467;
        echo $speed . " Foot per second";
    }

    function MilesPerHourToMilesPerHour($speed) {
        $speed = $speed * 1;
        echo $speed . " Miles per hour";
    }


    // ** Foot Per Second**
    function FootPerSecondToMilesPerHour($speed) {
        $speed = $speed / 1.467;
        echo $speed . " Miles per hour";
    }

    function FootPerSecondToMeterPerSecond($speed) {
        $speed = $speed / 3.281;
        echo $speed . " Meters per second";
    }

    function FootPerSecondToKilometerPerHour($speed) {
        $speed = $speed / 1.097;
        echo $speed . " Kilometers per hour";
    }

    function FootPerSecondToFootPerSecond($speed) {
        $speed = $speed * 1;
        echo $speed . " Foot per second";
    }

    // ** Meter Per Second **
    function MeterPerSecondToMilesPerHour($speed) {
        $speed = $speed * 2.237;
        echo $speed . " Miles per hour";
    }

    function MeterPerSecondToFootPerSecond($speed) {
        $speed = $speed * 3.281;
        echo $speed . " Foot per second";
    }

    function MeterPerSecondToKilometerPerHour($speed) {
        $speed = $speed * 3.6;
        echo $speed . " Kilometers per hour";
    }

    function MeterPerSecondToMeterPerSecond($speed) {
        $speed = $speed * 1;
        echo $speed . " Meters per second";
    }

    // ** Kilometer Per Hour **
    function KilometerPerHourToMilesPerHour($speed) {
        $speed = $speed / 1.609;
        echo $speed . " Miles per hour";
    }

    function KilometerPerHourToFootPerSecond($speed) {
        $speed = $speed / 1.097;
        echo $speed . " Foot per second";
    }

    function KilometerPerHourToMeterPerSecond($speed) {
        $speed = $speed / 3.6;
        echo $speed . " Meters per second";
    }
    
    function KilometerPerHourToKilometerPerHour($speed) {
        $speed = $speed * 1;
        echo $speed . " Kilometers per hour";
    }

    //Volume
    

    
    //Payroll
?>