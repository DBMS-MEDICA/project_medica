<?php
session_start();
if (isset($_SESSION["Patient"])) {
    include_once("./patient_dashboard.php");
}
