<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (
    isset($_POST['username']) &&
    isset($_POST['email']) &&
    isset($_POST['password1']) &&
    isset($_POST['password2']) &&
    isset($_POST['address1']) &&
    isset($_POST['address2']) &&
    isset($_POST['gender']) &&
    isset($_POST['phone']) &&
    isset($_POST['country']) &&
    isset($_POST['county']) &&
    isset($_POST['city'])
  ) {
    require_once '../connect.php';

    $empty_errors = [];
    $errors_validate = [];
    $num_error = 0;

    function clear($value)
    {
      $value = htmlspecialchars($value);
      $value = trim($value);
      $value = strtolower($value);
      return $value;
    }

    function check_empty($value)
    {
      global $empty_errors, $num_error;
      if ($value == '') {
        $empty_errors[$num_error] = 'empty';
      }
      $num_error++;
    }

    $username = clear($_POST['username']);
    $email = clear($_POST['email']);
    $password1 = clear($_POST['password1']);
    $password2 = clear($_POST['password2']);
    $gender = clear($_POST['gender']);
    $phone = clear($_POST['phone']);
    $country = clear($_POST['country']);
    $county = clear($_POST['county']);
    $city = clear($_POST['city']);

    check_empty($username); // 0
    check_empty($email); // 1
    check_empty($password1); // 2

    // username validate
    if (isset($empty_errors[0])) {
      $errors_validate['username'] = 'Username cannot be empty.';
    } else if (strlen($username) < 5 || strlen($username) > 20) {
      $errors_validate['username'] = 'Username must be between 5 and 20 characters long.';
    } else {
      preg_match('/\w+/i', $username, $userTest);
      if (strlen($userTest[0]) != strlen($username)) {
        $errors_validate['username'] = 'Username can only contain letters, numbers, and underscores.';
      }
    }

    // email validate
    if (isset($empty_errors[1])) {
      $errors_validate['email'] = 'Email cannot be empty.';
    } else {
      $email = filter_var($email, FILTER_VALIDATE_EMAIL);
      if ($email == false) {
        $errors_validate['email'] = 'Invalid email format.';
      }
      $query = "SELECT id FROM users WHERE email = '$email'";
      $query = mysqli_query($conn, $query);
      if ($query->num_rows > 0) {
        $errors_validate['email'] = 'This email is already reserved';
      }
    }

    // password validate
    if (isset($empty_errors[2])) {
      $errors_validate['password'] = 'Password cannot be empty.';
    } elseif (strlen($password1) < 8) {
      $errors_validate['password'] = 'Password must be at least 8 characters long.';
    } else {
      preg_match('/[\w\s]+/i', $password1, $passTest);
      if (strlen($passTest[0]) != strlen($password1)) {
        $errors_validate['password'] = 'Password can only contain letters, numbers, and underscores.';
      } else if ($password1 != $password2) {
        $errors_validate['password2'] = 'Passwords do not match';
      }
    }

    // user gender validate
    if (!isset($_POST['gender'])) {
      $errors_validate['gender'] = 'Must Check on Role cannot be empty.';
    }

    // user type validate
    // if (!isset($_POST['type'])) {
    //   $errors_validate['type'] = 'Must Check on Role cannot be empty.';
    // }

    $_SESSION['person'] = [
      'username' => $username,
      'email' => $email,
      'password1' => $password1,
      'password2' => $password2,
      'gender' => $gender,
      // 'type' => $type,
    ];

    if (empty($errors_validate)) {


      $password1 = md5($password1);
      $query = "INSERT INTO users (username, email, password, gender) VALUES ('$username', '$email', '$password1', '$gender')";
      // mysqli_execute_query($conn, $query);
      if (!mysqli_query($conn, $query)) {
        $_SESSION['errors']['sql'] = mysqli_error($conn);
        header('location: register.php');
        exit;
      }
      session_unset();
      session_destroy();
      header('location: users_page.php');
      exit;
    } else {
      $_SESSION['errors'] = $errors_validate;
      header('location: register.php');
      exit;
    }
  } else {
    $_SESSION['input_false'] = false;
    header('location: ../../login/register.php');
  }
}
