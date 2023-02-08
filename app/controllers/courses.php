<?php

  $table = "courses";
  $courses = selectAll($table);

  $errors = array();
  $id = "";
  $course_title = "";
  $course_details = "";
  $priceDisplay = "";

  if (isset($_GET['id'])) {
    $course = selectOne($table, ['id' => $_GET['id']]);

    $id = $course['id'];
    $course_title = $course['course_title'];
    $course_details = $course['course_details'];
    $priceDisplay = $course['priceDisplay'];
  }

  if (isset($_POST['addCourse'])) {
    // $errors = validatespeaker($_POST);

    if (count($errors) === 0) {
      unset($_POST['addCourse']);

      $course_id = create($table, $_POST);
      $course = selectOne($table, ['id' => $course_id]);
      $_SESSION['message'] = 'Course created successfully';
      $_SESSION['type'] = 'success';

      header('location: ' . BASE_URL . 'user/viewCourses'); 
      exit();
    } else {
      $course_title = $_POST['course_title'];
      $course_details = $_POST['course_details'];
      $priceDisplay = $_POST['priceDisplay'];
    }
  }

?>