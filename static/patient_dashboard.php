<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PatientDashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">Project Medica</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Medical History</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Browse Doctors</a></li>
                    <li class="nav-item" role="presentation"><button class="btn btn-danger" type="button"><a class="text-white" href="#">Emergency</a></button></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">More</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item text-danger" role="presentation" href="../api/logout.php">Logout</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="padding: 30px;">
        <div class="col">
            <div class="row" style="margin-top: 10px;margin-bottom: 10px;">
                <div class="col">
                    <div class="card border-dark shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-2"><img class="rounded-circle border border-dark" src="assets/img/blank-profile-picture-973460_1280.jpg" style="width: 150px;"></div>
                                <div class="col-auto" style="font-size: 5px;padding-top: 40px;">
                                    <h4>Welcome USERNAME</h4>
                                    <h4 style="font-weight: normal;font-size: 18px;">You have ? appointments this week</h4>
                                </div>
                                <div class="col offset-xl-3 text-center d-xl-flex align-self-center justify-content-xl-center align-items-xl-center"><a href="./new_appointment.php"><button class="btn btn-primary border rounded" type="button" style="width: 188px;height: 57px;font-size: 18px;">+New Appointment</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div style="padding: 10px;"><a class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button" style="padding: 15px 15 px;">My Appointments</a>
                    <div class="collapse" id="collapse-1">
                        <div class="row" style="margin: 10px -15px;">
                            <div class="col">
                                <div class="card shadow-sm">
                                    <div class="card-body bg-light shadow-sm">
                                        <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Appointments</h4>
                                        <div class="card" style="margin: 15px;">
                                            <div class="card-body shadow">
                                                <h4 class="card-title" style="font-weight: 500;font-size: 20px;">DOCTOR_NAME</h4>
                                                <h6 class="text-muted card-subtitle mb-2"></h6>
                                                <div style="padding-top: 15px;">
                                                    <p>Chamber location:</p>
                                                    <p>Phone:</p>
                                                    <p>Serial no.:</p>
                                                    <p>ETA:</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card" style="margin: 15px;">
                                            <div class="card-body shadow">
                                                <h4 class="card-title" style="font-weight: 500;font-size: 20px;">DOCTOR_NAME</h4>
                                                <h6 class="text-muted card-subtitle mb-2"></h6>
                                                <div style="padding-top: 15px;">
                                                    <p>Chamber location:</p>
                                                    <p>Phone:</p>
                                                    <p>Serial no.:</p>
                                                    <p>ETA:</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card" style="margin: 15px;">
                                            <div class="card-body shadow">
                                                <h4 class="card-title" style="font-weight: 500;font-size: 20px;">DOCTOR_NAME</h4>
                                                <h6 class="text-muted card-subtitle mb-2"></h6>
                                                <div style="padding-top: 15px;">
                                                    <p>Chamber location:</p>
                                                    <p>Phone:</p>
                                                    <p>Serial no.:</p>
                                                    <p>ETA:</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 10px;"><a class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button">My Prescriptions</a>
                    <div class="collapse" id="collapse-2">
                        <div class="row" style="margin: 10px -15px;">
                            <div class="col">
                                <div class="card shadow-sm">
                                    <div class="card-body bg-light shadow-sm">
                                        <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Prescriptions</h4>
                                        <div class="card" style="margin: 15px;">
                                            <div class="card-body shadow">
                                                <h4 class="card-title" style="font-weight: 500;font-size: 20px;">Prescribed by DOCTOR_NAME</h4>
                                                <h6 class="text-muted card-subtitle mb-2"></h6>
                                                <div style="padding-top: 15px;">
                                                    <p>Medicine:</p>
                                                    <ul>
                                                        <li>Item 1</li>
                                                        <li>Item 2</li>
                                                        <li>Item 3</li>
                                                        <li>Item 4</li>
                                                    </ul>
                                                    <p>Notes:</p>
                                                    <p>Prescribed tests:</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card" style="margin: 15px;">
                                            <div class="card-body shadow">
                                                <h4 class="card-title" style="font-weight: 500;font-size: 20px;">Prescribed by DOCTOR_NAME</h4>
                                                <h6 class="text-muted card-subtitle mb-2"></h6>
                                                <div style="padding-top: 15px;">
                                                    <p>Medicine:</p>
                                                    <ul>
                                                        <li>Item 1</li>
                                                        <li>Item 2</li>
                                                        <li>Item 3</li>
                                                        <li>Item 4</li>
                                                    </ul>
                                                    <p>Notes:</p>
                                                    <p>Prescribed tests:</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card" style="margin: 15px;">
                                            <div class="card-body shadow">
                                                <h4 class="card-title" style="font-weight: 500;font-size: 20px;">Prescribed by DOCTOR_NAME</h4>
                                                <h6 class="text-muted card-subtitle mb-2"></h6>
                                                <div style="padding-top: 15px;">
                                                    <p>Medicine:</p>
                                                    <ul>
                                                        <li>Item 1</li>
                                                        <li>Item 2</li>
                                                        <li>Item 3</li>
                                                        <li>Item 4</li>
                                                    </ul>
                                                    <p>Notes:</p>
                                                    <p>Prescribed tests:</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>