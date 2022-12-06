<?php

// This is the array where we will store the messages
$messages = [];

// If the form was submitted, handle the input
if (isset($_POST['message'])) {
  // Add the message to the array
  $messages[] = $_POST['message'];
}

// Return the messages as JSON
header('Content-Type: application/json');
echo json_encode($messages);

?>
