<?php

  $table = "submissions";
  $submissions = selectAll($table);

  $errors = array();
  $id = "";
  $user_id = "";
  $accepts = "";
  $title = "";
  $track = "";
  $secondary = "";
  $format = "";
  $tracksubmitreason = "";
  $abstract = "";
  $outline = "";
  $newcontent = "";
  $oldcontent = "";
  $newresearch = "";
  $takeaways = "";
  $solveproblem = "";
  $newtool = "";
  $tooloption = "";
  $newvulnerable = "";
  $disclosevulnerable = "";
  $discloseprocess = "";
  $demo = "";
  $presenter = "";
  $event = "";
  $videosample = "";
  $reviewmessage = "";
  $fileupload = "";
  $status = "";
  // $speakers = "";
  $created_at = "";

  if (isset($_GET['id'])) {
    $submission = selectOne($table, ['id' => $_GET['id']]);

    $id = $submission['id'];
    $user_id = $submission['user_id'];
    $title = $submission['title'];
    $track = $submission['track'];
    $secondary = $submission['secondary'];
    $format = $submission['format'];
    $tracksubmitreason = $submission['tracksubmitreason'];
    $abstract = $submission['abstract'];
    $outline = $submission['outline'];
    $newcontent = $submission['newcontent'];
    $oldcontent = $submission['oldcontent'];
    $newresearch = $submission['newresearch'];
    $takeaways = $submission['takeaways'];
    $solveproblem = $submission['solveproblem'];
    $newtool = $submission['newtool'];
    $tooloption = $submission['tooloption'];
    $newvulnerable = $submission['newvulnerable'];
    $disclosevulnerable = $submission['disclosevulnerable'];
    $discloseprocess = $submission['discloseprocess'];
    $demo = $submission['demo'];
    $presenter = $submission['presenter'];
    $event = $submission['event'];
    $videosample = $submission['videosample'];
    $reviewmessage = $submission['reviewmessage'];
    $fileupload = $submission['fileupload'];
    $status = $submission['status'];
    // $speakers = $submission['speakers'];
  }

  // Create a paper
  if (isset($_POST['submit-proposal'])) {
    
    if (!empty($_FILES['fileupload']['name'])) {
      $file_name = time() . '_' . $_FILES['fileupload']['name'];
      $destination = ROOT_PATH . "/assets/docs/" . $file_name;
      $result = move_uploaded_file($_FILES['fileupload']['tmp_name'], $destination);

      if ($result) {
        $_POST['fileupload'] = $file_name;
      } else {
        array_push($errors, "Failed to upload file");
      }
    } else {
      array_push($errors, "You need to upload a document...");
    }

    if (count($errors) === 0) {
      unset($_POST['submit-proposal']);

      $_POST['user_id'] = $_SESSION['id'];
      $_POST['newcontent'] = isset($_POST['newcontent']) ? 1 : 0;
      $_POST['newtool'] = isset($_POST['newtool']) ? 1 : 0;
      $_POST['newvulnerable'] = isset($_POST['newvulnerable']) ? 1 : 0;
      $_POST['disclosevulnerable'] = isset($_POST['disclosevulnerable']) ? 1 : 0;
      $_POST['demo'] = isset($_POST['demo']) ? 1 : 0;
      $_POST['accepts'] = isset($_POST['accepts']) ? 1 : 0;
      $_POST['status'] = "Pending";

      $submit_id = create($table, $_POST);
      $_SESSION['message'] = "Post created successfully";
      $_SESSION['type'] = "success";
      header("location: " . BASE_URL . "user/submissions.php");
      exit();    
    } else {
      $title = $_POST['title'];
      $track = $_POST['track'];
      $secondary = $_POST['secondary'];
      $format = $_POST['format'];
      $tracksubmitreason = $_POST['tracksubmitreason'];
      $abstract = $_POST['abstract'];
      $outline = $_POST['outline'];
      $newcontent = isset($_POST['newcontent']) ? 1 : 0;
      $oldcontent = $_POST['oldcontent'];
      $newresearch = $_POST['newresearch'];
      $takeaways = $_POST['takeaways'];
      $solveproblem = $_POST['solveproblem'];
      $newtool = isset($_POST['newtool']) ? 1 : 0;
      $tooloption = $_POST['tooloption'];
      $newvulnerable = isset($_POST['newvulnerable']) ? 1 : 0;
      $disclosevulnerable = isset($_POST['disclosevulnerable']) ? 1 : 0;
      $discloseprocess = $_POST['discloseprocess'];
      $demo = isset($_POST['demo']) ? 1 : 0;
      $presenter = $_POST['presenter'];
      $event = $_POST['event'];
      $videosample = $_POST['videosample'];
      $reviewmessage = $_POST['reviewmessage'];
      // $speakers = $_POST['speakers'];
    }

  }

  // Update a proposal
  if (isset($_POST['update-proposal'])) {

    if (count($errors) === 0) {
      $id = $_POST['id'];
      unset($_POST['update-proposal'], $_POST['id']);

      $_POST['user_id'] = $_SESSION['id'];
      $_POST['newcontent'] = isset($_POST['newcontent']) ? 1 : 0;
      $_POST['newtool'] = isset($_POST['newtool']) ? 1 : 0;
      $_POST['newvulnerable'] = isset($_POST['newvulnerable']) ? 1 : 0;
      $_POST['disclosevulnerable'] = isset($_POST['disclosevulnerable']) ? 1 : 0;
      $_POST['demo'] = isset($_POST['demo']) ? 1 : 0;

      $submit_id = update($table, $id, $_POST);
      $_SESSION['message'] = "Proposal has been updated";
      $_SESSION['type'] = "success";
      header("location: " . BASE_URL . "user/submissions.php");
      exit();
    } else {
      $title = $_POST['title'];
      $track = $_POST['track'];
      $secondary = $_POST['secondary'];
      $format = $_POST['format'];
      $tracksubmitreason = $_POST['tracksubmitreason'];
      $abstract = $_POST['abstract'];
      $outline = $_POST['outline'];
      $newcontent = isset($_POST['newcontent']) ? 1 : 0;
      $oldcontent = $_POST['oldcontent'];
      $newresearch = $_POST['newresearch'];
      $takeaways = $_POST['takeaways'];
      $solveproblem = $_POST['solveproblem'];
      $newtool = isset($_POST['newtool']) ? 1 : 0;
      $tooloption = $_POST['tooloption'];
      $newvulnerable = isset($_POST['newvulnerable']) ? 1 : 0;
      $disclosevulnerable = isset($_POST['disclosevulnerable']) ? 1 : 0;
      $discloseprocess = $_POST['discloseprocess'];
      $demo = isset($_POST['demo']) ? 1 : 0;
      $presenter = $_POST['presenter'];
      $event = $_POST['event'];
      $videosample = $_POST['videosample'];
      $reviewmessage = $_POST['reviewmessage'];
      // $speakers = $_POST['speakers'];
    }

  }

  // Delete proposal
  if (isset($_GET['delete_id'])) {
    
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Proposal has been deleted.";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "user/submissions.php"); 
    exit();
  }

  // Approve Paper Submission
  if (isset($_GET['id'])) {
    $id = $_POST['id'];
    unset($_POST['id']);

    $submit_id = approvePaper($table, $_GET['id'], $_POST);
    $_SESSION['message'] = 'Proposal approved';
    $_SESSION['type'] = 'success';
  
    header('location: ' . BASE_URL . 'user/proposals.php');
  }

?>