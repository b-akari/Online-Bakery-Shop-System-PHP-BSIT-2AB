<?php
session_start();

include 'init.php';
$type = $_REQUEST["type"];

switch ($type) {
  case 'registration_validation':
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      echo "username";
    } else {

      $sql = "SELECT * FROM user WHERE email = '$email'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo "email";
      } else {
        echo "null";
      }
    }
    break;

  case 'register':
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    $sql = "INSERT INTO user(username, email, password) VALUES ('$username','$email','$password')";

    if ($conn->query($sql) === TRUE) {
      echo "User registered successfully!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    break;

  case 'login':
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
      echo "email";
    } else {
      $data = $result->fetch_assoc();
      if ($password != $data['password']) {
        echo "password";
        break;
      }
      $_SESSION["username"] = $data["username"];
      $_SESSION["email"] = $data["email"];


      echo json_encode($result->fetch_assoc());
    }
    break;

  case 'logout':
    session_unset();
    session_destroy();
    echo "Log out successfully!";
    break;
}

$conn->close();