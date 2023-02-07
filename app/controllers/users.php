<?php

  include(ROOT_PATH . "/app/helpers/validateUser.php");

  $table = "users";
  $admin_users = selectAll($table);

  $errors = array();
  $id = "";
  $firstname = "";
  $lastname = "";
  $email = "";
  $emailagain = "";
  $phone = "";
  $password ="";
  $passwordagain ="";
  $title = "";
  $company = "";
  $admin = "";

  // Login User Query
  function loginUser($user)
  {
    $_SESSION['id'] = $user['id'];
    $_SESSION['firstname'] = $user['firstname'];
    $_SESSION['lastname'] = $user['lastname'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['phone'] = $user['phone'];
    $_SESSION['title'] = $user['title'];
    $_SESSION['company'] = $user['company'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
      header('location: ' . BASE_URL . 'user/account.php?id=' . $user['id']); 
    } else {
      header('location: ' . BASE_URL . 'user/account.php?id=' . $user['id']);
    }
    exit();
  }

  // Create User
  if (isset($_POST['createAccount']) || isset($_POST['createAdmin'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
      unset($_POST['createAccount'], $_POST['passwordagain'], $_POST['emailagain']);
      $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
      
      if (isset($_POST['admin'])) {
        $_POST['admin'] = 1;
        $user_id = create($table, $_POST);
        $_SESSION['message'] = 'Admin user created';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . 'admin/index.php'); 
        exit();
      } else {
      $user_id = create($table, $_POST);
      $user = selectOne($table, ['id' => $user_id]);
      loginUser($user);

      header('location: ' . 'signin.php');
      }
    } else {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $admin = isset($_POST['admin']) ? 1 : 0;
      $title = $_POST['title'];
      $company = $_POST['company'];
    }
  }

  // Login User
  if (isset($_POST['signinBtn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
      $user = selectOne($table, ['email' => $_POST['email']]);

      if ($user && password_verify($_POST['password'], $user['password'])) {
        loginUser($user);
      } else {
        array_push($errors, 'Wrong credentials');
      }
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
  }

  if (isset($_POST['updateUser'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
      $id = $_POST['id'];
      unset($_POST['updateUser'], $_POST['id']);
        
      $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
      $count = update($table, $id, $_POST);
      $_SESSION['message'] = 'User updated';
      $_SESSION['type'] = 'success';
      header('location: ' . BASE_URL . 'user/account.php'); 
      exit();
    } else {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $admin = isset($_POST['admin']) ? 1 : 0;
      $title = $_POST['title'];
      $company = $_POST['company'];
    }
  }

  if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);
    
    $id = $user['id'];
    $firstname = $user['firstname'];
    $lastname = $user['lastname'];
    $admin = $user['admin'];
    $email = $user['email'];
    $phone = $user['phone'];
    $title = $user['title'];
    $company = $user['company'];
  }

?>