<?php

  $table = "speakers";
  $speakers = selectAll($table);

  $errors = array();
  $id = "";
  $first_name = "";
  $last_name = "";
  $nameDisplay = "";
  $email = "";
  $phone = "";
  $title = "";
  $organization = "";
  $country = "";
  $usStateSelect = "";
  $caStateSelect = "";
  $twitter = "";
  $website = "";
  $linkedinUrl = "";
  $bio = "";
  $prevPresent = "";
  $badge_name = "";
  $badge_org = "";
  $cissp = "";
  $meal = "";

  if (isset($_GET['id'])) {
    $speaker = selectOne($table, ['id' => $_GET['id']]);

    $id = $speaker['id'];
    $first_name = $speaker['first_name'];
    $last_name = $speaker['last_name'];
    $nameDisplay = $speaker['nameDisplay'];
    $email = $speaker['email'];
    $phone = $speaker['phone'];
    $title = $speaker['title'];
    $organization = $speaker['organization'];
    $country = $speaker['country'];
    $usStateSelect = $speaker['usStateSelect'];
    $caStateSelect = $speaker['caStateSelect'];
    $twitter = $speaker['twitter'];
    $website = $speaker['website'];
    $linkedinUrl = $speaker['linkedinUrl'];
    $bio = $speaker['bio'];
    $prevPresent = $speaker['prevPresent'];
    $badge_name = $speaker['badge_name'];
    $badge_org = $speaker['badge_org'];
    $cissp = $speaker['cissp'];
    $meal = $speaker['meal'];
  }

  if (isset($_POST['addSpeaker'])) {
    // $errors = validatespeaker($_POST);

    if (count($errors) === 0) {
      unset($_POST['addSpeaker']);

      $_POST['user_id'] = $_SESSION['id'];
      $speaker_id = create($table, $_POST);
      $speaker = selectOne($table, ['id' => $speaker_id]);
      $_SESSION['message'] = 'Speaker created';
      $_SESSION['type'] = 'success';

      header('location: ' . BASE_URL . 'user/submit.php'); 
      exit();
    } else {
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $nameDisplay = $_POST['nameDisplay'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $title = $_POST['title'];
      $organization = $_POST['organization'];
      $country = $_POST['country'];
      $usStateSelect = $_POST['usStateSelect'];
      $caStateSelect = $_POST['caStateSelect'];
      $twitter = $_POST['twitter'];
      $website = $_POST['website'];
      $linkedinUrl = $_POST['linkedinUrl'];
      $bio = $_POST['bio'];
      $prevPresent = $_POST['prevPresent'];
      $badge_name = $_POST['badge_name'];
      $badge_org = $_POST['badge_org'];
      $cissp = $_POST['cissp'];
      $meal = $_POST['meal'];
    }
  }

?>