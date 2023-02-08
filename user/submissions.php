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

    <title>Hakorld - Submissions</title>

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
              <img src="../assets/images/cfp.png">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-2">
	        <div class="nav">
		        <ul class="nav nav-tabs nav-stacked">
		          <li class="active">
		            <a href="submissions.php" accesskey="s"><u>S</u>ubmissions</a>
		          </li>
							<li>
		            <a href="courses.php" accesskey="c"><u>C</u>ourses</a>
		          </li>
		          <li>
		            <a href="account.php?id=<?php echo $_SESSION['id'] ?>" accesskey="m"><u>M</u>y account</a>
		          </li>
              <?php if($_SESSION['admin']): ?>
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
              <a href="submit.php" class="btn btn-sm btn-primary">Submit a new proposal</a>
            <div class="col-lg-10" style="overflow-x: auto;">
              <table class="table">
                <thead>
                  <tr>
                    <th style="width: 10px;">#</th>
                    <th style="min-width: 200px;">Title</th>
                    <th style="min-width: 170px;">Document</th>
                    <th style="min-width: 130px;">Actions</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($submissions as $key => $submission): ?>
                    <?php if($submission['user_id'] == $_SESSION['id']): ?>
                      <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $submission["title"]; ?></td>
                        <td><?php echo $submission["fileupload"]; ?></td>
                        <td style="font-size: 10px;">
                          <a href="edit.php?id=<?php echo $submission["id"]; ?>" class="btn btn-sm btn-primary">Edit</a>
                          <a href="edit.php?delete_id=<?php echo $submission['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                        <td><i><?php echo $submission["status"]; ?></i></td>
                      </tr>
                    <?php endif; ?>
									<?php endforeach; ?>
                </tbody>
              </table>
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