<?php
	include("../path.php");
	include(ROOT_PATH . "/app/database/db.php");
	// include(ROOT_PATH . "/app/controllers/users.php"); 
	include(ROOT_PATH . "/app/controllers/courses.php"); 

  if (!$_SESSION['firstname']) {
    header('location: ' . BASE_URL . 'auth/signin.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:title" content="Black Hat">
		<meta property="og:description" content="Black Hat is the most technical and relevant global information security event series in the world. These high-profile global events and Trainings are driven by the needs of the security community, striving to bring together the best minds in the industry.">
		<meta property="og:image" content="https://www.blackhat.com/images/page-graphics/metatag/logo-2018.png">

    <link href="../auth/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../auth/assets/css/styles.css" rel="stylesheet">

		<style>
			body {
				font-family: "Inter", sans-serif;
			}
		</style>

    <title>Hakorld - Add Course</title>
  </head>
  <body>
    <div class="container">
			<div class="row" id="header-container">
				<div id="header" class="span12 asia-logo">
			
					<div class="pull-right text-right" id="user-info">
						Welcome, <?php echo $_SESSION['lastname'] . " " . $_SESSION['firstname']; ?>
						<div class="cfp-image">
							<img src="../assets/images/cfp.png">
						</div>
					</div>
				</div>
			</div>

   		<div class="row">
				<div class="col-lg-2">
					<div class="nav">
						<ul class="nav nav-tabs nav-stacked">
							<li>
								<a href="submissions.php" accesskey="s"><u>S</u>ubmissions</a>
							</li>
							<li>
		            <a href="courses.php" accesskey="c"><u>C</u>ourses</a>
		          </li>
							<li>
								<a href="account.php?id=<?php echo $_SESSION['id'] ?>" accesskey="m"><u>M</u>y account</a>
							</li>
							<?php if($_SESSION['admin']): ?>
								<li class="active">
									<a href="addCourse" accesskey="v"><u>A</u>dd Courses</a>
								</li>
								<li>
									<a href="proposals" accesskey="a"><u>R</u>eview Proposals</a>
								</li>
								<li>
									<a href="viewUsers" accesskey="v"><u>V</u>iew Users</a>
								</li>
							<?php endif; ?>
							<li class="inactive">
								<a href="../logout.php" accesskey="l" data-method="post" rel="nofollow"><u>L</u>ogout</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-10" id="content">

					<form method="POST" action="addCourse.php" class="form-horizontal" enctype="multipart/form-data">

						<div class="fieldset form-horizontal">
							<legend>Add Course Details</legend>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Course Title *:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $course_title; ?>" name="course_title" value="">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Course Price *:</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" value="<?php echo $course_price; ?>" name="course_price">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Course End Date *:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $course_date; ?>" name="course_date" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Course Track *:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $course_track; ?>" name="course_track" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Course Format *:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $course_format; ?>" name="course_format" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Course Skill Level *:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $skill_level; ?>" name="skill_level" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Learning Experience *:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $experience; ?>" name="experience" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Course Details *:</label>
							<div class="col-sm-9">
								<textarea name="course_details" cols="30" rows="5" placeholder="Short course description" class="form-control"><?php echo $course_details; ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Course Details *:</label>
							<div class="col-sm-9">
								<textarea name="system_req" cols="30" rows="5" placeholder="System requirements" class="form-control"><?php echo $system_req; ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" name="addCourse" class="btn btn-large btn-primary">Add Course</button>
							</div>
						</div>
					</form>

				</div>
			</div>
 		</div> <!-- /container -->

 		<div class="row">
			<div id="footer" class="col-sm-12">
				<hr>
				<div class="navFOOT">
					<a href="https://www.blackhat.com/">home</a>/
					<a href="http://blackhat.com/html/archives.html">archives</a>/
					<a href="http://blackhat.com/html/about.html">about</a>/
					<a href="http://blackhat.com/html/contact.html">contact</a>
				</div>
				<div class="copyright">
					<p>
						(2023 black hat ™) an Informa Tech company //
						<a target="_blank" href="https://www.informatech.com/about-us">about informa tech</a>
					</p>
				</div>
			</div>
		</div>

	</body>
</html>