 <?php

    include_once("../classes/entities/Patient.class.php");
    include "./helpers/Patient/patient_populator.inc.php";
    include "./helpers/Patient/patient_dashboard_cards.inc.php";

    $patient = json_decode($_SESSION["Patient"]);

    ?>

 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <title>Patient Dashboard</title>
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
                                     <h4>Welcome <?php echo $patient->patient_name ?></h4>
                                     <h4 style="font-weight: normal;font-size: 18px;">You have <?php
                                                                                                //  NEED TO FETCH COUNT OF UPCOMING APPOINTMENTS, CONSIDER PROCESSING APPOINTMENT COUNT BEFORE PAGE RENDER
                                                                                                ?> appointments this week</h4>
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

                                         <!-- APPOINTMENT CARD GENERATION -->


                                         <?php generate_appointment_card("Hoo3", "Mohammadpur", 18, "18:00, 6-Mar-2022") ?>
                                         <?php generate_appointment_card("Hoo1", "Dhanmondi", 12, "12:30, 11-Jan-2022") ?>
                                         <?php generate_appointment_card("Hoo2", "Shyamoli", 5, "11:40, 1-Feb-2022") ?>
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


                                         <!-- PRESCRIPTION CARD GENERATION -->

                                         <?php generate_prescription_card("DocName", "Azmasol, Meth, Quizole, Water", "Patient is probably dead inside", "Vibe check"); ?>
                                         <?php generate_prescription_card("AnotherDocName", "Cocaine, Paracetamol, Oxycodone, Water 2", "Patient needs to chill lmao", "death, idk"); ?>
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