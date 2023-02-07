<?php

  function validateUser($user)
  {
    $errors = array();

    if (empty($user['firstname'])) {
      array_push($errors, 'First name is required');
    }
    if (empty($user['lastname'])) {
      array_push($errors, 'Last name is required');
    }
    if (empty($user['email'])) {
      array_push($errors, 'Email is required');
    }
    if ($user['emailagain'] !== $user['email']) {
      array_push($errors, 'Email does not match');
    }
    if (empty($user['phone'])) {
      array_push($errors, 'Contact number is required');
    }
    if (empty($user['password'])) {
      array_push($errors, 'Password is required');
    }
    if ($user['passwordagain'] !== $user['password']) {
      array_push($errors, 'Passwords do not match');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
      if (isset($user['createAccount'])) {
        array_push($errors, 'Email already exists');
      }
    }
    return $errors;
  }

  function validateLogin($user)
  {
    $errors = array();

    if (empty($user['email'])) {
      array_push($errors, 'Email is required');
    }
    if (empty($user['password'])) {
      array_push($errors, 'Password is required');
    }
    return $errors;
  }

?>