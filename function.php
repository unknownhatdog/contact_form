<?php
include 'connection.php';

if (isset($_POST['submitButton'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $gender = $_POST['gender'];
  $topic1 = $_POST['topic1'];
  $topic2 = $_POST['topic2'];
  $topic3 = $_POST['topic3'];
  $textarea = $_POST['textarea'];

  $checkbox = $_POST['topic'];
  $temp_topic = "";
  foreach ($checkbox as $temp_topic1) {
    $temp_topic.= $temp_topic1. ",";
  }


  $query = "INSERT INTO contact_form(First_name, Last_name, Email, Subject, Gender, Topic, Message)
    VALUES ('$firstname', '$lastname', '$email', '$subject', '$gender', '$temp_topic', '$textarea')";

  $query_run = mysqli_query($con, $query);

  if ($query_run) {
    header("location: thank_you.php?success");
  } else {
    echo "Something went wrong!";
  }
}
