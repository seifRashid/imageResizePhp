<?php

include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $title = $_POST['title'];
  $description = $_POST['$description'];

if(!isset($title) && !isset($description)) {
  header('location: index.php');
}

$title = test_input($_POST['title']);
$description = test_input($_POST['description']);
uploadImage();



}
