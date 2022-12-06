
$messages = [];

if (isset($_POST['message'])) {
  // Add the message to the array
  $messages[] = $_POST['message'];
}

header('Content-Type: application/json');
echo json_encode($messages);
