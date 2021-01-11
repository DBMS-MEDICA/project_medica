<?php

//TODO: DURATION CALCULATION

function generate_caregiver_card($patient_name, $patient_contact_number, $patient_address, $duration, $health_issues)
{
    echo '
    <div class="card" style="margin: 15px;">
        <div class="card-body shadow">
            <h6 class="text-muted card-subtitle mb-2"></h6>
            <div style="padding-top: 15px;">
                <p><b>Patient Name: </b>' . $patient_name  . '</p>
                <p><b>Patient Contact No: </b>' . $patient_contact_number  . '</p>
                <p><b>Patient Address: </b>' . $patient_address  . '</p>
                <p><b>Duration: </b>' . $duration  . '</p>
                <p><b>Health Issues: </b>' . $health_issues  . '</p>
            </div>
        </div>
    </div>
    ';
}
