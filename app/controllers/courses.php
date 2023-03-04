<?php

  $table = "courses";
  $courses = selectAll($table);

  $errors = array();

  $id = "";
  $course_title = "";
  $course_price = "";
  $course_date = "";
  $course_track = "";
  $course_format = "";
  $skill_level = "";
  $experience = "";
  $course_details = "";

  if (isset($_GET['id'])) {
    $course = selectOne($table, ['id' => $_GET['id']]);

    $id = $course['id'];
    $course_title = $course['course_title'];
    $course_price = $course['course_price'];
    $course_date = $course['course_date'];
    $course_track = $course['course_track'];
    $course_format = $course['course_format'];
    $skill_level = $course['skill_level'];
    $experience = $course['experience'];
    $course_details = $course['course_details'];
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
      $course_price = $_POST['course_price'];
      $course_date = $course['course_date'];
      $course_track = $course['course_track'];
      $course_format = $course['course_format'];
      $skill_level = $course['skill_level'];
      $experience = $course['experience'];
      $course_details = $_POST['course_details'];
    }
  }

?>