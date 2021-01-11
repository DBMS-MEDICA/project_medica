<?php

function generate_chamber($chamber)
{
    echo '<p>' . $chamber->location . '<br>' . $chamber->day . '<br>Time: ' . $chamber->opening_time . ' - ' . $chamber->closing_time . '<br>' . $chamber->map_url . '<br>' . $chamber->fee . '</p>';
}




function generate_doctor_card($doctor_name, $specialization, $designation, $hospital_name, $qualification, $rating, $chambers)
{

    //$chambers is an array of Chambers

    echo '
    <div class="card" style="margin: 15px;">
        <div class="card-body shadow">
            <div style="padding-top: 15px;">
                <div class="row">
                    <div class="col-xl-3"><img class="rounded-circle border border-dark" src="assets/img/blank-profile-picture-973460_1280.jpg" style="width: 150px;"></div>
                    <div class="col">
                        <h6 class="text-muted mb-2">' . $doctor_name . ' </h6>
                        <p> ' . $specialization . '<br>' . $designation .  ', ' . $hospital_name . ' </p>
                        <p>' . $qualification .  '</p>
                    </div>
                    <div class="col-xl-3" style="padding: 0px;padding-right: 15px;">
                        <h6 class="text-right text-muted mb-2">Rating: ' . $rating . '<br><br></h6>
                        <div class="text-center"><button class="btn btn-primary text-center" type="button" style="width: 139.891px;">Appointment</button></div>
                    </div>
                    <div class="col-xl-12">
                        <div class="text-right"><a class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">Show Chambers</a>
                            <div class="collapse text-left" id="collapse-1">
                                <p><strong>Chamber(s):</strong><br></p>';

    for ($i = 0; $i < count($chambers); $i++) {
        generate_chamber($chambers[$i]);
    }



    echo '</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    ';
}
