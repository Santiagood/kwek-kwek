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
        echo "The converted speed is: " . $speed . " Kilometer per hour";
    }

    function MilesPerHourToMeterPerSecond($speed) {
        $speed = $speed / 2.237;
        echo "The converted speed is: " . $speed . " Meters per second";
    }

    function MilesPerHourToFootPerSecond($speed) {
        $speed = $speed * 1.467;
        echo "The converted speed is: " . $speed . " Foot per second";
    }

    function MilesPerHourToMilesPerHour($speed) {
        $speed = $speed * 1;
        echo "The converted speed is: " . $speed . " Miles per hour";
    }


    // ** Foot Per Second**
    function FootPerSecondToMilesPerHour($speed) {
        $speed = $speed / 1.467;
        echo "The converted speed is: " . $speed . " Miles per hour";
    }

    function FootPerSecondToMeterPerSecond($speed) {
        $speed = $speed / 3.281;
        echo "The converted speed is: " . $speed . " Meters per second";
    }

    function FootPerSecondToKilometerPerHour($speed) {
        $speed = $speed / 1.097;
        echo "The converted speed is: " . $speed . " Kilometers per hour";
    }

    function FootPerSecondToFootPerSecond($speed) {
        $speed = $speed * 1;
        echo "The converted speed is: " . $speed . " Foot per second";
    }

    // ** Meter Per Second **
    function MeterPerSecondToMilesPerHour($speed) {
        $speed = $speed * 2.237;
        echo "The converted speed is: " . $speed . " Miles per hour";
    }

    function MeterPerSecondToFootPerSecond($speed) {
        $speed = $speed * 3.281;
        echo "The converted speed is: " . $speed . " Foot per second";
    }

    function MeterPerSecondToKilometerPerHour($speed) {
        $speed = $speed * 3.6;
        echo "The converted speed is: " . $speed . " Kilometers per hour";
    }

    function MeterPerSecondToMeterPerSecond($speed) {
        $speed = $speed * 1;
        echo "The converted speed is: " . $speed . " Meters per second";
    }

    // ** Kilometer Per Hour **
    function KilometerPerHourToMilesPerHour($speed) {
        $speed = $speed / 1.609;
        echo "The converted speed is: " . $speed . " Miles per hour";
    }

    function KilometerPerHourToFootPerSecond($speed) {
        $speed = $speed / 1.097;
        echo "The converted speed is: " . $speed . " Foot per second";
    }

    function KilometerPerHourToMeterPerSecond($speed) {
        $speed = $speed / 3.6;
        echo "The converted speed is: " . $speed . " Meters per second";
    }
    
    function KilometerPerHourToKilometerPerHour($speed) {
        $speed = $speed * 1;
        echo "The converted speed is: " . $speed . " Kilometers per hour";
    }

    //Volume
    function Volume_run() {
        if (isset($_POST['Cylinder-Radius']) && isset($_POST['Cylinder-Height'])) {
            $radius = $_POST['Cylinder-Radius'];
            $height = $_POST['Cylinder-Height'];
            Cylinder($radius, $height);
        }

        if (isset($_POST['Sphere-Radius'])) {
            $radius = $_POST['Sphere-Radius'];
            Sphere($radius);
        }

        if (isset($_POST['Cone-Radius']) && isset($_POST['Cone-Height'])) {
            $radius = $_POST['Cone-Radius'];
            $height = $_POST['Cone-Height'];
            Cone($radius, $height);
        }

        if (isset($_POST['Cube-Edge'])) {
            $edge = $_POST['Cube-Edge'];
            Cube($edge);
        }

        if (isset($_POST['Prism-Base']) && isset($_POST['Prism-Height'])) {
            $base = $_POST['Prism-Base'];
            $height = $_POST['Prism-Height'];
            Prism($base, $height);
        }

        if (isset($_POST['TriangularPrism-Base']) && isset($_POST['TriangularPrism-Height']) && isset($_POST['TriangularPrism-Length'])) {
            $base = $_POST['TriangularPrism-Base'];
            $height = $_POST['TriangularPrism-Height'];
            $length = $_POST['TriangularPrism-Length'];
            TriangularPrism($base, $height, $length);
        }
    }

    function Cylinder($radius, $height) {
        $volume = 3.1415*((($radius)*($radius))*$height);
        echo "The volume of the cylinder is: " . $volume . " cm3";
    }

    function Sphere($radius) {
        $volume = ((4/3)*(3.1415*(($radius)*($radius)*($radius))));
        echo "The volume of the sphere is: " . $volume . " m2";
    }

    function Cone($radius, $height) {
        $volume = (3.1415 * (($radius) * ($height)));
        echo "The volume of the cone is: " . $volume . " cm2";
    }

    function Cube($edge) {
        $volume = (($edge)*($edge)*($edge));
        echo "The volume of the cube is: " . $volume . " in3";
    }

    function Prism($base, $height) {
        $volume = (($base) * ($height));
        echo "The volume of the prism is: " . $volume . " cm3";
    }

    function TriangularPrism($base, $height, $length) {
        $volume = (($base)*($height)*($length))/2;
        echo "The volume of the triangular prism is: " . $volume . " cm3";
    }
    
    //Payroll

    function outputJob($position) {
        echo "<input type='text' class='form-control' id='output-position' value='" . $position . "' disabled>";
    }

    function outputName($name) {
        echo "<input type='text' class='form-control' id='output-name' value='" . $name . "' disabled>";
    }

    function outputAge($age) {
        echo "<input type='text' class='form-control' id='output-age' value='" . $age . "' disabled>";
    }

    function outputID($id) {
        echo "<input type='text' class='form-control' id='output-ID' value='" . $id ." @ IT-205". "' disabled>";
    }
    
    function outputGross($gross) {
        echo "<input type='text' class='form-control' id='output-gross-salary' value='" . $gross . "' disabled>";
    }

    function outputPhilhealth($philhealth) {
        echo "<input type='text' class='form-control' id='output-philhealth' value='" . $philhealth . "' disabled>";
    }

    function outputPagibig($pagibig) {
        echo "<input type='text' class='form-control' id='output-pagibig' value='" . $pagibig . "' disabled>";
    }

    function outputSSS($sss) {
        echo "<input type='text' class='form-control' id='output-sss' value='" . $sss . "' disabled>";
    }

    function outputTax($tax) {
        echo "<input type='text' class='form-control' id='output-tax' value='" . $tax . "' disabled>";
    }

    function outputTotalDeduction($totaldeduction) {
        echo "<input type='text' class='form-control' id='output-total-deduction' value='" . $totaldeduction . "' disabled>";
    }

    function outputSalary($netsalary) {
        echo "<input type='text' class='form-control' id='output-net-salary' value='" . $netsalary . "' disabled>";
    }

    function outputContractUntil($contractuntil) {
        echo "<input type='text' class='form-control' id='output-net-salary' value='" . $contractuntil . "' disabled>";
    }
?>