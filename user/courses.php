<?php 
	include("../path.php");
	include(ROOT_PATH . "/app/database/db.php");
	include(ROOT_PATH . "/app/controllers/users.php"); 
	include(ROOT_PATH . "/app/controllers/submissions.php"); 

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
	  <meta property="og:description" content="">
	  <meta property="og:image" content="https://www.blackhat.com/images/page-graphics/metatag/logo-2018.png">

    <title>Hakorld - Courses</title>

    <link href="../auth/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../auth/assets/css/styles.css" rel="stylesheet">

    <style>
      body > * {
        font-family: "Inter", sans-serif;
      }
    </style>

  </head>
  <body>
    <div class="container">
      <div class="row" id="header-container">
        <div id="header" class="span12 asia-logo">
          <div class="pull-right text-right" id="user-info">
            Welcome, <?php echo $_SESSION['lastname'] . " " . $_SESSION['firstname']; ?>
            <div class="cfp-image">
              <img src="../assets/images/cfp.png" alt="cfp-system">
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
							<li class="active">
		            <a href="courses.php" accesskey="c"><u>C</u>ourses</a>
		          </li>
		          <li>
		            <a href="account.php?id=<?php echo $_SESSION['id'] ?>" accesskey="m"><u>M</u>y account</a>
		          </li>
		          <li class="inactive">
		            <a href="../logout.php" accesskey="l" data-method="post" rel="nofollow"><u>L</u>ogout</a>
		          </li>
		        </ul>
	        </div>
        </div>

        <div class="col-lg-10" id="content">
          <div class="row">
            <div class="col-lg-10">
							<h3>Your Training Roadmap</h3>
							<div class="col-lg-6 register-course">
								<img src="../assets/images/undraw_mind_map_re_nlb6.svg" class="roadmap-img" alt="Roadmap Image">
								<a href="#" class="btn btn-md btn-primary">Register for a course</a>
							</div>
							<div class="col-lg-4">
								<div class="roadmap">
									<h4><strong>Offensive Classes</strong></h4>
									<p>
										Hacking training for all levels: new to advanced, ideal for those preparing for certifications such as
										CREST CCT (ICE), CREST CCT (ACE), CHECK (CTL), TIGER SST, as well as infrastructure/web application
										penetration testers wishing to add to their existing skill set.
									</p>
								</div>
								<div class="roadmap def">
									<h4><strong>Defensive Classes</strong></h4>
									<p>
										Giving you the skills needed to get ahead and secure your business by design. We specialize in application
										security (both secure coding and building security testing into your software development lifecycle) and
										cloud security. Build security capability into your teams, enabling you to move fast and stay secure.
									</p>
								</div>
							</div>
						</div>
          </div>
        </div>
      </div>

 	  </div> <!-- /container -->
 	  <div class="row">
	    <div id="footer" class="col-sm-12">
	      <hr>
	      <div class="navFOOT">
	        <a href="https://www.blackhat.com/">Home</a>/
	        <a href="http://blackhat.com/html/archives.html">Archives</a>/
	        <a href="http://blackhat.com/html/about.html">About</a>/
	        <a href="http://blackhat.com/html/contact.html">Contact</a>
	      </div>
	      <div class="copyright">
	        <p>
	          (2023 Hakorld ™) an Informa Tech company //
	          <a target="_blank" href="https://www.informatech.com/about-us">about informa tech</a>
	        </p>
	      </div>
	    </div>
	  </div>

  </body>
</html>