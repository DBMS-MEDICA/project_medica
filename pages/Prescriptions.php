<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Prescriptions</title>
    <!-- Google icon font -->
    <link href="resources/material-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet"  type="text/css" href="resources/fontawesome-free-5.13.0-web/css/all.css">
    <!-- Minified CSS -->
    <link rel="stylesheet" href="resources/materialize.min.css">
    <!-- Customized CSS -->
    <link rel="stylesheet" href="resources/stylesheet.css">
    
    <style>
        
    </style>
</head>
<body>

    <!-- NavBar & SideNav-->
    <div id="navigation">
        <div class="navbar-fixed" id="navbar">
            <nav class="nav-wraper white"><!-- transparent vs white -->
                <div class="container">
                    <div class="brand-logo">
                        <span class="custom-logo"></span>
                        <a href="#" class="red-text text-darken-2 blackjack">Medica</a>
                    </div>
                    <a href="#" class="sidenav-trigger hide-on-med-and-up" data-target="sidenav">
                        <i class="material-icons black-text">menu</i>
                    </a>
                </div>
                <ul class="hide-on-med-and-down right">
                    <li><a href="#" class="waves-effect black-text"><b>Home</b></a></li>
                    <li><a href="#" class="waves-effect black-text"><b>About</b></a></li>
                    <li><a href="#" class="waves-effect black-text"><b>Contact us</b></a></li>
                    <li><a class="waves-effect black-text" onclick="showActivities()"><b>Activities</b></a></li>
                    <li><a class="waves-effect black-text" onclick="showSearchBar()"><b>Search</b></a></li>
                    <li><a href="#" class="waves-effect black-text"><b>Profile</b></a></li>
                    <li><a href="#" class="waves-effect black-text"><b>Sign out</b></a></li>
                </ul>
                <ul class="hide-on-large-only hide-on-small-only left">
                    <li><a href="#" class="waves-effect black-text"><i class="material-icons">home</i></a></li>
                    <li><a href="#" class="waves-effect black-text"><i class="material-icons">info</i></a></li>
                    <li><a href="#" class="waves-effect black-text"><i class="material-icons">phone</i></a></li>
                </ul>
                <ul class="hide-on-large-only right">
                    <li><a class="waves-effect black-text" onclick="showActivities()"><i class="material-icons">apps</i></a></li>
                    <li><a class="waves-effect black-text" onclick="showSearchBar()"><i class="material-icons">search</i></a></li>
                    <li><a href="#" class="waves-effect hide-on-small-only black-text"><i class="material-icons">account_circle</i></a></li>
                </ul>
            </nav>
        </div>
        <ul class="sidenav" id="sidenav">
            <div>
            <li><a href="#" class="waves-effect">Home</a></li>
            <li><a href="#" class="waves-effect">About</a></li>
            <li><a href="#" class="waves-effect">Contact us</a></li>
            <li><a href="#" class="waves-effect">Profile</a></li>
            <li><a href="#" class="waves-effect">Sign out</a></li>
            <li>
                <a href="#" class="waves-effect dropdown-trigger" data-target="activities-dropdown">Activities</a>
                <ul id='activities-dropdown' class='dropdown-content'>
                    <li><a href="#!"><i class="fas fa-id-card green-text text-darken-1"></i>Medical Card</a></li>
                    <li><a href="#!"><i class="fas fa-stethoscope grey-text text-darken-2"></i>Doctor List</a></li>
                    <li><a href="#!"><i class="fas fa-file-medical grey-text text-darken-4"></i>Prescriptions</a></li>
                    <li><a href="#!"><i class="fas fa-pills maya-blue-text"></i>Pharmacy</a></li>
                    <li><a href="#!"><i class="fas fa-first-aid red-text text-darken-2"></i>Emergency</a></li>
                    <li><a href="#!"><i class="fas fa-ambulance maastricht-blue-text"></i>Ambulance</a></li>
                    <li><a href="#!"><i class="fas fa-tint red-text text-darken-1"></i>Blood Donor</a></li>
                    <li><a href="#!"><i class="fas fa-user-nurse french-pink-text"></i>Caregiver</a></li>
                    <li><a href="#!"><i class="fas fa-handshake blue-text"></i>My Appointments</a></li>
                    <li><a href="#!"><i class="fas fa-history pink-text text-lighten-2"></i>Caregiver History</a></li>
                    <li><a href="#!"><i class="fas fa-notes-medical lime-text text-darken-4"></i>Donor History</a></li>
                    
                </ul>
            </li>
        </ul>
    </div>


    <!-- Activities shortcut & Search bar -->
    <div class="row">
        <div class="col fixed s19 m6 l5 xl4 offset-s3 offset-m6 offset-l7 offset-xl8 z-depth-2 white scale-transition scale-out" id="activities-shortcut">
            <div class="row">

            </div>
            <div class="row">
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-tint red-text text-darken-1"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-stethoscope grey-text text-darken-2"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-user-nurse french-pink-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    Blood Donor
                </div>
                <div class="col s4 m4 l4 center">
                    Doctor List
                </div>
                <div class="col s4 m4 l4 center">
                    Caregiver
                </div>
            </div>
            <div class="row">
                <!-- empty space -->
            </div>
            <div class="row">
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-ambulance maastricht-blue-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-pills maya-blue-text"></i>
                    </a>
                </div>
               <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large red darken-2 waves-effect waves-light pulse">
                        <i class="fas fa-first-aid white-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    Ambulance
                </div>
                <div class="col s4 m4 l4 center">
                    Pharmacy
                </div>
                <div class="col s4 m4 l4 center">
                    Emergency
                </div>
            </div>
            
            <hr>
            
            <div class="row">
                <!-- empty space -->
            </div>
            <div class="row">
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-file-medical grey-text text-darken-4"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-handshake blue-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-id-card green-text text-darken-1"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    Prescriptions
                </div>
                <div class="col s4 m4 l4 center">
                    <span class="hide-on-med-and-down">My</span> Appointments
                </div>
                <div class="col s4 m4 l4 center">
                    Medical Card
                </div>
            </div>
            <div class="row">
                <!-- empty space -->
            </div>
            <div class="row">
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-notes-medical lime-text text-darken-4"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-history pink-text text-lighten-2"></i>
                    </a>
                </div>
                <div class="col s4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-sync aquamarine-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    Donor History
                </div>
                <div class="col s4 m4 l4 center">
                    Caregiver History
                </div>
                <div class="col s4 m4 l4 center">
                    Update Profile
                </div>
            </div>
        </div>
        <nav class="col fixed s12 m6 l5 xl4 offset-m6 offset-l7 offset-xl8 z-depth-2 white scale-transition scale-out" id="search-bar">
            <div class="nav-wrapper">
                <form>
                    <div class="input-field">
                        <input id="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons  french-pink-text">search</i></label>
                        <i class="material-icons white french-pink-text right" onclick="hideSearchBar()">close</i>
                    </div>
                </form>
            </div>
        </nav>
    </div>


    <!-- Collapsible -->
    <div class="container white black-text">
        <ul class="collection maya-blue">
            <li class="collection-header center">
                <h4 class="white-text">
                    <i class="fas fa-file-medical"></i>
                    Prescritpion Archive
                </h4>
            </li>
        </ul>
        <ul class="collapsible" id="prescription">
            <li>
                <div class="row">
                  <div class="collapsible-header">
                        <div class="col s2 xl1 valign-wrapper">
                            <img src="resources/fas_fa-user-md.png" class="circle responsive-img right" alt="">
                        </div>
                        <div class="col s5 xl6 valign-wrapper">
                            <p>
                                Doctor Name
                                <br>
                                Specialization
                                <br>
                                Hospital Name
                            </p>
                        </div>
                        <div class="col s5 valign-wrapper">
                            <p>
                                Date:
                                <br>
                                Prescription id:
                                <br>
                                #prescription_id
                            </p>
                        </div>
                    </div>
              </div>
              <div class="collapsible-body">
                <div class="row">
                    <div class="col s12">
                      <ul class="tabs">
                          <li class="tab col s4"><a class="active" href="#medicine-tab">Medicines</a></li>
                          <li class="tab col s4"><a href="#report-tab">Related Tests</a></li>
                          <li class="tab col s4"><a href="#notes-tab">Notes</a></li>
                      </ul>
                    </div>
                </div>
                <div class="row">
                    <div id="medicine-tab" class="col s12">
                        sample medicine list
                    </div>
                    <div id="report-tab" class="col s12">
                        sample repost list
                    </div>
                    <div id="notes-tab" class="col s12">
                        sample notes
                    </div>
                </div>
              </div>
            </li>
        </ul>
    </div>


    <!-- Production jQuery -->
    <script src="resources/jquery-3.4.1.min.js"></script>

    <!-- Minified JavaScript -->
    <script src="resources/materialize.min.js"></script>
    
    <!-- Utilities -->
    <script src="resources/Utilities.js"></script>

    <script>
        class Prescription
        {
            constructor()
            {
                this.docName="Mike Uniform November Sierra";
                this.docSpec="Psychotherapist";
                this.hospital="Arkham Asylum";
                this.date="13.04.2020 Mon";
                this.presc_id="1210963390";
                this.medicine=["Alpha (1+0+0)", "Bravo (0+1+0)", "Charlie (0+0+1)"];
                this.report=["Delta", "Echo", "Foxtrot"];
                this.notes=["Golf", "Hotel", "India"];
            }
        };

        let obj = new Prescription;
        let array= [1,2,3,4,5,6,7,8];

        //Faizlami ends here

        let collection = document.querySelector('#prescription');
        array.forEach(elem => {
            let str =
            `
            <li>
                <div class="row">
                  <div class="collapsible-header">
                        <div class="col s2 xl1 valign-wrapper">
                            <img src="resources/doc${elem}.png" class="circle responsive-img right" alt="">
                        </div>
                        <div class="col s5 xl6 valign-wrapper">
                            <p>
                                ${obj.docName}
                                <br>
                                ${obj.docSpec}
                                <br>
                                ${obj.hospital}
                            </p>
                        </div>
                        <div class="col s5 valign-wrapper">
                            <p>
                                Date: ${obj.date}
                                <br>
                                Prescription id:
                                <br>
                                #${obj.presc_id}
                            </p>
                        </div>
                    </div>
              </div>
              <div class="collapsible-body">
                <div class="row">
                    <div class="col s12">
                      <ul class="tabs">
                          <li class="tab col s4"><a class="active" href="#medicine-tab-${elem /*Put distinctive prescription id here*/}">Medicines</a></li>
                          <li class="tab col s4"><a href="#report-tab-${elem /*Put distinctive prescription id here*/}">Related Tests</a></li>
                          <li class="tab col s4"><a href="#notes-tab-${elem /*Put distinctive prescription id here*/}">Notes</a></li>
                      </ul>
                    </div>
                </div>
                <div class="row">
                    <div id="medicine-tab-${elem /*Put distinctive prescription id here*/}" class="col s12">
                        <ul id="medicine-list-${elem /*Put distinctive prescription id here*/}">
                           
                        </ul>
                    </div>
                    <div id="report-tab-${elem /*Put distinctive prescription id here*/}" class="col s12">
                        <ul id="report-list-${elem /*Put distinctive prescription id here*/}">

                        </ul>
                    </div>
                    <div id="notes-tab-${elem /*Put distinctive prescription id here*/}" class="col s12">
                        <ul id="notes-list-${elem /*Put distinctive prescription id here*/}">
                        
                        </ul>
                    </div>
                </div>
              </div>
            </li>
            `;
            collection.innerHTML+=str;

            let medicine=document.querySelector(`#medicine-list-${elem /*Put distinctive prescription id here*/}`);
            obj.medicine.forEach(item => {
                medicine.innerHTML+=
                `
                <li>
                    ${item}
                </li>
                `;
            });
            let report=document.querySelector(`#report-list-${elem /*Put distinctive prescription id here*/}`);
            obj.report.forEach(item => {
                report.innerHTML+=
                `
                <li>
                    <a href="#!">${item}</a>
                </li>
                `;
            });
            let notes=document.querySelector(`#notes-list-${elem /*Put distinctive prescription id here*/}`);
            obj.notes.forEach(item => {
                notes.innerHTML+=
                `
                <li>
                    ${item}
                </li>
                `;
            });
            
            //Ask for help, anytime & anywhere!
        });
        
    </script>
</body>
</html>