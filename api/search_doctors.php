<?php
session_start();
$has_name = false;
$has_designation = false;
$has_specialization = false;
$has_rating = false;


if (isset($_POST['doc_name'])) {
    $has_name = true;
}

if (isset($_POST['doc_designation'])) {
    $has_designation = true;
}

if (isset($_POST['doc_specialization'])) {
    $has_specialization = true;
}

if (isset($_POST['doc_rating'])) {
    $has_rating = true;
}

$str = "select * from Doctor where ";
