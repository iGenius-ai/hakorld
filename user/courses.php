<?php 
	include("../path.php");
	include(ROOT_PATH . "/app/database/db.php");
	include(ROOT_PATH . "/app/controllers/users.php"); 
	include(ROOT_PATH . "/app/controllers/submissions.php"); 
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
							<?php if($_SESSION['admin']): ?>
								<li>
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
          <div class="row">
            <div class="col-lg-10">
							<h3>Your Training Roadmap</h3>
							<div class="col-lg-6 register-course">
								<img src="../assets/images/undraw_mind_map_re_nlb6.svg" class="roadmap-img" alt="Roadmap Image">
								<button class="btn btn-md btn-primary btn-open">Register for a course</button>
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

			<!-- Modal Section -->
			<section class="modal hidden"> <!-- Add .modal and .hidden -->
				<div class="flex">
					<img src="../assets/images/canary.png" width="50px" height="50px" alt="User">
					<button class="btn-close">&times;</button>
				</div>
				<div>
					<h3>Pick a course and apply</h3>
					<select name="" id="" class="form-control">
						<option value="">-- Select a course --</option>
						<?php foreach ($courses as $key => $course): ?>
							<?php if (!empty($course_id) && $course_id == $course['id'] ): ?>
								<option selected value="<?php echo $course['id'] ?>"><?php echo $course['course_title'] ?></option>
							<?php else: ?>
								<option value="<?php echo $course['id'] ?>"><?php echo $course['course_title'] ?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="flex hidden option-detail">
					<img src="../assets/images/banner.jpg" alt="" width="150px" height="150px" style="padding: 1rem;">
					<div>
						<h4><?php echo $course['course_title']; ?></h4>
						<small>$450.00</small>
						<p>This is a 6-Month training course on Ethical Hacking</p>
					</div>
				</div>

				<button class="btn btn-pay">Pay with PayStack &check;</button>
			</section>

			<div class="overlay hidden"></div>
			<!-- End Modal Section -->

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

		<script>

			const modal = document.querySelector(".modal");
			const overlay = document.querySelector(".overlay");
			const openModalBtn = document.querySelector(".btn-open");
			const closeModalBtn = document.querySelector(".btn-close");

			// const optionDetail = document.querySelector(".option-detail");
			// const optionThree = document.querySelector("#option-four");
			// optionThree.addEventListener("click", function () {
			// 	optionDetail.classList.remove("hidden");
			// 	console.log(optionDetail);
			// });

			const openModal = function () {
				modal.classList.add("fade-in");
				overlay.classList.remove("hidden");
				setTimeout(() => {
					modal.classList.remove("hidden");
				}, 100);

				if (modal.classList.contains("fade-out")) {
					modal.classList.remove("fade-out");
				}
			};
			const closeModal = function () {
				overlay.classList.add("hidden");
				setTimeout(() => {
					modal.classList.add("hidden");
				}, 100);

				if (modal.classList.contains("fade-in")) {
					modal.classList.remove("fade-in");
					modal.classList.add("fade-out");
				} else {
					modal.classList.remove("fade-out");
				}
			};

			openModalBtn.addEventListener("click", openModal);
			closeModalBtn.addEventListener("click", closeModal);
			overlay.addEventListener("click", closeModal);

			document.addEventListener("keydown", function (e) {
				if (e.key === "Escape" && !modal.classList.contains("hidden")) {
					closeModal();

					if (modal.classList.contains("fade-in")) {
						modal.classList.remove("fade-in");
						modal.classList.add("fade-out");
					} else {
						modal.classList.remove("fade-out");
					}
				}
			});

		</script>
  </body>
</html>