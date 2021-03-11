<?php
    include 'functions.php';
?>

<html>
    <head>
        <title>Kwek-Kwek</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">  
    </head>
        
    <body style="background-color: #ececec">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Midterm - Assignment One</span>
            </div>
        </nav>
        <div class="accordion" id="accordionHead" style="padding: 50px;">
            
            <!--card-temperature-->
            <div class="card">
                <div class="card-header" id="header-card-temperature">
                    <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#card-temperature" aria-expanded="false" aria-controls="card-temperature">
                            Temperature Convertion
                        </button>
                    </h2>
                </div>
                <div id="card-temperature" class="collapse" aria-labelledby="header-card-temperature" data-parent="#accordionHead">
                    <div class="card-body">
                        <select class="form-select" id="tempchoice" aria-label="Default select example" onchange="tempChoice()">
                            <option selected>Select Temperature</option>
                            <option value="1">Celcius to Fahrenheit</option>
                            <option value="2">Fahrenheit to Celcius</option>
                        </select>
                        <br>
                        <form method="post">
                            <div class="input-group mb-3">
                                <input type="text" id="tempForm" class="form-control" placeholder="" name="" aria-describedby="button-addon2" required>
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Submit</button>
                            </div>
                        </form>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buttonTemperature">Show Result</button>
                    </div>
                </div>
            </div>

            <!--card-BMI-->
            <div class="card">
                <div class="card-header" id="header-card-BMI">
                    <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#card-BMI" aria-expanded="false" aria-controls="card-BMI">
                            Compute BMI
                        </button>
                    </h2>
                </div>
                <div id="card-BMI" class="collapse" aria-labelledby="header-card-BMI" data-parent="#accordionHead">
                    <div class="card-body">
                        <!-- Tables for information about BMI-->
                        <div class="table-responsive-md">
                                <table class="table table-info table-striped table-hover" style="text-align: center;">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">BMI</th>
                                            <th scope="col">Category</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row"> < 16.0 </td>
                                            <td>Severely Underweighted</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">16.0 - 18.4</td>
                                            <td>Underweight</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">18.5 - 24.9</d>
                                            <td>Normal</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">25.0 - 29.9</td>
                                            <td>Overweight</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">30.0 - 34.9</td>
                                            <td>Moderately Obese</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">35.0 - 39.9</td>
                                            <td>Severely Obese</td>
                                        </tr>
                                        <tr>
                                            <td scope="row"> > 40.0</td>
                                            <td>Morbidly Obese</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        <form method="post">
                            <div class="input-group mb-3">
                                <input type="text" id="bmiFormWeight" class="form-control" placeholder="Weight:" name="Weight" aria-describedby="button-addon3" required>
                                <span class="input-group-text">kilogram</span>
                                <input type="text" id="bmiFormHeight" class="form-control" placeholder="Height:" name="Height" aria-describedby="button-addon3" required>
                                <span class="input-group-text">meters</span>
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon3">Submit</button>
                            </div>
                        </form>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buttonBMI">Show Results</button>
                    </div>
                </div>
            </div>

            <!--card-Distance-->
            <div class="card">
                <div class="card-header" id="header-card-distance">
                    <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#card-distance" aria-expanded="false" aria-controls="card-distance">
                            Distance Conversion
                        </button>
                    </h2>
                </div>
                <div id="card-distance" class="collapse" aria-labelledby="header-card-distance" data-parent="#accordionHead">
                    <div class="card-body">
                        <form method="post">
                            <div class="input-group">
                                <span class="input-group-text">From</span>
                                <select class="form-select" id="convertspeedselectFrom" onchange="speedChoice()">
                                    <option selected>Select Unit: </option>
                                    <option value="1">Miles Per Hour</option>
                                    <option value="2">Foot Per Second</option>
                                    <option value="3">Meter Per Second</option>
                                    <option value="4">Kilometer Per Hour</option>
                                </select>
                                <input type="text" class="form-control" id="FromSpeedForm" placeholder="" name="" aria-describedby="button-select-speed" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-text">To</span>
                                <select class="form-select" id="convertspeedselectTo" onchange="speedChoice()">    
                                    <option selected>Select Unit: </option>
                                    <option value="5">Miles Per Hour</option>
                                    <option value="6">Foot Per Second</option>
                                    <option value="7">Meter Per Second</option>
                                    <option value="8">Kilometer Per Hour</option>                                   
                                </select>
                                <button class="btn btn-outline-secondary" type="submit" id="button-select-speed">submit</button>
                            </div>
                        </form>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buttonDistance">Show Results</button>
                    </div>
                </div>
            </div>

            <!--card-volume-->
            <div class="card">
                <div class="card-header" id="header-card-volume">
                    <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#card-volume" aria-expanded="false" aria-controls="card-volume">
                            Volume Conversion
                        </button>
                    </h2>
                </div>
                <div id="card-volume" class="collapse" aria-labelledby="header-card-volume" data-parent="#accordionHead">
                    <div class="card-body">
                        <select class="form-select" id="volumechoice" onchange="VolumeChoice()">
                            <option value="0" selected>Select Volume Shape</option>
                            <option value="1">Cylinder</option>
                            <option value="2">Sphere</option>
                            <option value="3">Cone</option>
                            <option value="4">Cube</option>
                            <option value="5">Prism</option>
                            <option value="6">Triangular Prism</option>
                        </select>
                        <br>

                        <!-- Cylinder -->
                        <div id="CylinderDiv" style="display: none;">
                            <form method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="Cylinder-Radius" name="" aria-describedby="button-volume-Cylinder" placeholder="Enter value: " required/>
                                    <span class="input-group-text">Radius</span>
                                    <input type="text" class="form-control" id="Cylinder-Height" name="" aria-describedby="button-volume-Cylinder" placeholder="Enter value: " required/>
                                    <span class="input-group-text">Height</span>
                                    <button class="btn btn-outline-secondary" type="submit" id="button-volume-Cylinder">Submit</button>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Sphere -->
                        <div id="SphereDiv" style="display: none;">
                            <form method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="Sphere-Radius" aria-describedby="button-volume-Sphere" name="" placeholder="Enter value: " required/>
                                    <span class="input-group-text">Radius</span>
                                    <button class="btn btn-outline-secondary" id="button-volume-Sphere" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                                                
                        <!-- Cone -->
                        <div id="ConeDiv" style="display: none;">
                            <form method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="Cone-Radius" aria-describedby="button-volume-Cone" name="" placeholder="Enter value: " required/>
                                    <span class="input-group-text">Radius</span>
                                    <input type="text" class="form-control" id="Cone-Height" aria-describedby="button-volume-Cone" name="" placeholder="Enter value: " required/>
                                    <span class="input-group-text">Height</span>
                                    <button class="btn btn-outline-secondary" id="button-volume-Cone" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Cube -->
                        <div id="CubeDiv" style="display: none;">
                            <form method="post">   
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="Cube-Edge" aria-describedby="button-volume-Cube" name="" placeholder="Enter value: " required/>
                                    <span class="input-group-text">Edge</span>
                                    <button class="btn btn-outline-secondary" id="button-volume-Cube" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Prism -->
                        <div id="PrismDiv" style="display: none;">
                            <form method="post">    
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="Prism-Base" aria-describedby="button-volume-Prism" name="" placeholder="Enter value: " required/>
                                    <span class="input-group-text">Base</span>
                                    <input type="text" class="form-control" id="Prism-Height" aria-describedby="button-volume-Prism" name="" placeholder="Enter value: " required/>
                                    <span class="input-group-text">Height</span>
                                    <button class="btn btn-outline-secondary" id="button-volume-Prism" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Triangular Prism -->
                        <div id="TriangularPrismDiv" style="display: none;">
                            <form method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="TriangularPrism-Base" aria-describedby="button-volume-TriangularPrism" name="" placeholder="Enter value: " required/>
                                    <span class="input-group-text">Base</span>
                                    <input type="text" class="form-control" id="TriangularPrism-Height" aria-describedby="button-volume-TriangularPrism" name="" placeholder="Enter value: " required/>
                                    <span class="input-group-text">Height</span>
                                    <input type="text" class="form-control" id="TriangularPrism-Length" aria-describedby="button-volume-TriangularPrism" name="" placeholder="Enter value: " required/>
                                    <span class="input-group-text">Length</span>
                                    <button class="btn btn-outline-secondary" id="button-volume-TriangularPrism" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buttonVolume">Show Results</button>
                    </div>
                </div>
            </div>
                    
            <!--card-payroll-->
            <div class="card">
                <div class="card-header" id="header-card-payroll">
                    <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#card-payroll" aria-expanded="false" aria-controls="card-payroll">
                            Payroll
                        </button>
                    </h2>
                </div>
                <div id="card-payroll" class="collapse" aria-labelledby="header-card-payroll" data-parent="#accordionHead">
                    <div class="card-body">
                        <form method="post">
                            <div class="container">
                                <!-- age and name-->
                                <div class="row">
                                    <div class="col" id="job-position">
                                        <label for="select-job-position" class="form-label">Job Position</label>
                                        <select name="select-job-position" class="form-select" id="select-job-position" onchange="PositionToRate()" required>
                                            <option value="0" selected>Job Position: </option>
                                            <option value="System Administrator">System Administrator</option>
                                            <option value="Database Administrator">Database Administrator</option>
                                            <option value="Senior Developer">Senior Developer</option>
                                            <option value="Junior Developer">Junior Developer</option>
                                        </select>
                                    </div>
                                    <div class="col" id="employee-id">
                                        <label for="employeeID" class="form-label">Employee ID</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="employeeID" name="employeeID" placeholder="Employee ID: " required>
                                            <span class="input-group-text">@ IT-205</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- job position and employee id -->
                                <div class="row">
                                    <div class="col" id="employee-name">
                                        <label for="employeeName" class="form-label">Employee Name</label>
                                        <input type="text" class="form-control" id="employeeName" name="employeeName" placeholder="Lastname, Firstname, Mi : " required>
                                    </div>
                                    <div class="col" id="employee-age">
                                        <label for="employeeAge" class="form-label">Employee Age</label>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" id="employeeAge" name="employeeAge" placeholder="Age: " required>
                                            <span class="input-group-text">years old</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- year employeed and year until -->
                                <div class="row">
                                    <div class="col" id="year-employeed">
                                        <label for="yearEmployeed" class="form-label">Year Employeed</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Year</span>
                                            <input type="text" class="form-control" id="year-employeed-show" name="year-employeed-show" value="" placeholder="Year Started" required readonly>
                                            <input type="range" class="form-range" min="2010" name="yearEmployeed" max="2021" id="yearEmployeed" oninput="sliderShowYear()">
                                        </div>
                                    </div>
                                    <div class="col" id="contract-until">
                                        <label for="contractUntil" class="form-label">Contract Until</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Year</span>
                                            <input type="text" class="form-control" id="contractUntil" name="contractUntil" value="" placeholder="Year Ended" required readonly>
                                        </div>
                                    </div>
                                </div>

                                <!-- rate per hour and number of hours a day and submit -->
                                <div class="row">
                                    <div class="col" id="rate-per-hour">
                                        <label for="ratePerHour" class="form-label">Rate Per Hour</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="ratePerHour" name="ratePerHour" value="" placeholder="Rate Per Hour" required readonly>
                                        </div>
                                    </div>
                                    <div class="col" id="hours-per-day">
                                        <label for="yearEmployeed" class="form-label">Number Of Hours a Day</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="numberOfHoursADay" name="numberOfHoursADay" value="" placeholder="Worked for: " required disabled>
                                            <span class="input-group-text">Hours a day</span>
                                            <input type="range" class="form-range" min="6" name="sliderHours" max="12" id="sliderHours" oninput="sliderShowHours()">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-outline-secondary" id="button-submit-payroll" style="float: right;" type="submit">Submit</button>
                            </div>                            
                        </form>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buttonPayroll">Show Results</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Modals-->

        <!--temperature-modal-->
        <div class="modal fade" id="buttonTemperature" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Result for temperature</h5>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">
                                <?php
                                    Temperature_run();                     
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--BMI-modal-->
        <div class="modal fade" id="buttonBMI" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Result for BMI</h5>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">
                                <?php
                                    BMI_run();                  
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Distance-modal-->
        <div class="modal fade" id="buttonDistance" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Result for Distance</h5>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">
                                <?php
                                    Distance_run();
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!--Volume-modal-->
        <div class="modal fade" id="buttonVolume" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Result for Volume</h5>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">
                                <?php
                                    Volume_run()
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!--Payroll-modal-->
        <div class="modal fade" id="buttonPayroll" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Result for Payroll</h5>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">
                            <?php 
                                if (isset($_POST['select-job-position'])) {
                                    $position = $_POST['select-job-position'];  
                                }

                                if (isset($_POST['employeeID'])) {
                                    $id = $_POST['employeeID'];  
                                }

                                if (isset($_POST['employeeName'])) {
                                    $name = $_POST['employeeName'];
                                }
                                
                                if (isset($_POST['contractUntil'])) {
                                    $contractuntil = $_POST['contractUntil'];
                                }

                                if (isset($_POST['employeeAge'])) {
                                    $age = $_POST['employeeAge'];
                                }

                                if (isset($_POST['ratePerHour'])) {
                                    $rateperhour = $_POST['ratePerHour'];
                                }
                                
                                if (isset($_POST['sliderHours'])) {
                                    $hoursperday = $_POST['sliderHours'];
                                }

                                $gross = $rateperhour * $hoursperday;
                                $philhealth = $gross * 0.05;
                                $pagibig = $gross * 0.07;
                                $sss = $gross * 0.07;
                                $tax = $gross * 0.10;
                                $totaldeduction = $philhealth + $pagibig + $sss + $tax;
                                $netsalary = ($gross - $totaldeduction) * 30;
                            ?>
                            
                            <div class="container">
                                <div class="row row-cols-auto">
                                    <div class="col">
                                        <label for="output-name" class="form-label">Name: </label>
                                        <?php
                                            outputName($name);
                                        ?>
                                    </div>
                                    <div class="col">
                                        <label for="output-age" class="form-label">Age: </label>
                                        <?php
                                            outputAge($age);
                                        ?>
                                    </div>
                                    <div class="col">
                                        <label for="output-position" class="form-label">Job Position: </label>
                                        <?php
                                            outputJob($position);
                                        ?>
                                    </div>

                                    <div class="col">
                                        <label for="output-position" class="form-label">Contract Until: </label>
                                        <?php
                                            outputContractUntil($contractuntil);
                                        ?>
                                    </div>

                                    <div class="col">
                                        <label for="output-ID" class="form-label">Employee ID</label>
                                        <?php
                                            outputID($id);
                                        ?>
                                    </div>
                                    <div class="col">
                                        <label for="output-gross-salary" class="form-label">Gross Salary</label>
                                        <?php
                                            outputGross($gross);
                                        ?>
                                    </div>
                                    <div class="col">
                                        <label for="output-philhealth" class="form-label">Philhealth</label>
                                        <?php
                                            outputPhilhealth($philhealth);
                                        ?>
                                    </div>
                                    <div class="col">
                                        <label for="output-pagibig" class="form-label">Pagibig</label>
                                        <?php
                                            outputPagibig($pagibig);
                                        ?>
                                    </div>
                                    <div class="col">
                                        <label for="output-sss" class="form-label">SSS</label>
                                        <?php
                                            outputSSS($sss);
                                        ?>
                                    </div>
                                    <div class="col">
                                        <label for="output-tax" class="form-label">Tax</label>
                                        <?php
                                            outputTax($tax);
                                        ?>
                                    </div>
                                    <div class="col">
                                        <label for="output-total-deduction" class="form-label">Total Deduction</label>
                                        <?php
                                            outputTotalDeduction($totaldeduction);
                                        ?>
                                    </div>
                                    <div class="col">
                                        <label for="output-net-salary" class="form-label">Net Salary</label>
                                        <?php
                                            outputSalary($netsalary);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            </h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Script -->
        <script src="app.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    
</html>