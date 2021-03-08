<!DOCTYPE hmtl>
<html>
    <head>
        <title>Kwek-Kwek</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
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
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#card-temperature" aria-expanded="false" aria-controls="card-temperature">
                            Temperature Convertion
                        </button>
                    </h2>
                </div>
                <div id="card-temperature" class="collapse" aria-labelledby="header-card-temperature" data-parent="#accordionHead">
                    <div class="card-body">
                        the form goes here! <br><br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buttonTemperature">Show Result</button>
                    </div>
                </div>
            </div>

            <!--card-BMI-->
            <div class="card">
                <div class="card-header" id="header-card-BMI">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#card-BMI" aria-expanded="false" aria-controls="card-BMI">
                            Compute BMI
                        </button>
                    </h2>
                </div>
                <div id="card-BMI" class="collapse" aria-labelledby="header-card-BMI" data-parent="#accordionHead">
                    <div class="card-body">
                        the form goes here! <br><br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buttonBMI">Show Results</button>
                    </div>
                </div>
            </div>

            <!--card-Distance-->
            <div class="card">
                <div class="card-header" id="header-card-distance">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#card-distance" aria-expanded="false" aria-controls="card-distance">
                            Distance Conversion
                        </button>
                    </h2>
                </div>
                <div id="card-distance" class="collapse" aria-labelledby="header-card-distance" data-parent="#accordionHead">
                    <div class="card-body">
                        the form goes here! <br><br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buttonDistance">Show Results</button>
                    </div>
                </div>
            </div>

            <!--card-volume-->
            <div class="card">
                <div class="card-header" id="header-card-volume">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#card-volume" aria-expanded="false" aria-controls="card-volume">
                            Volume Conversion
                        </button>
                    </h2>
                </div>
                <div id="card-volume" class="collapse" aria-labelledby="header-card-volume" data-parent="#accordionHead">
                    <div class="card-body">
                        the form goes here! <br><br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buttonVolume">Show Results</button>
                    </div>
                </div>
            </div>
                    
            <!--card-payroll-->
            <div class="card">
                <div class="card-header" id="header-card-payroll">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#card-payroll" aria-expanded="false" aria-controls="card-payroll">
                            Payroll
                        </button>
                    </h2>
                </div>
                <div id="card-payroll" class="collapse" aria-labelledby="header-card-payroll" data-parent="#accordionHead">
                    <div class="card-body">
                        the form goes here! <br><br>
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
                    <div class="modal-body">
                        <p>results for temperature</p>
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
                    <div class="modal-body">
                        <p>results for BMI</p>
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
                    <div class="modal-body">
                        <p>results for distance</p>
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
                    <div class="modal-body">
                        <p>results for volume</p>
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
                    <div class="modal-body">
                        <p>results for payroll</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Script -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    
</html>