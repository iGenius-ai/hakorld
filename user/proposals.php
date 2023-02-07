<?php 
	include("../path.php");
	include(ROOT_PATH . "/app/database/db.php");
	include(ROOT_PATH . "/app/controllers/users.php"); 
	include(ROOT_PATH . "/app/controllers/submissions.php"); 

  if (!$_SESSION['firstname']) {
    header('location: ' . BASE_URL . 'auth/signin.php');
  } else if (!$_SESSION['admin']) {
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

    <title>Hakorld - Review Submissions</title>

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
		          <li>
		            <a href="submissions" accesskey="s"><u>S</u>ubmissions</a>
		          </li>
							<li>
		            <a href="courses" accesskey="c"><u>C</u>ourses</a>
		          </li>
		          <li>
		            <a href="account?id=<?php echo $_SESSION['id'] ?>" accesskey="m"><u>M</u>y account</a>
		          </li>
              <?php if($_SESSION['admin']): ?>
								<li class="active">
									<a href="proposals" accesskey="a"><u>R</u>eview Proposals</a>
								</li>
								<li>
									<a href="viewUsers" accesskey="v"><u>V</u>iew Users</a>
								</li>
							<?php endif; ?>
		          <li class="inactive">
		            <a href="../logout" accesskey="l" data-method="post" rel="nofollow"><u>L</u>ogout</a>
		          </li>
		        </ul>
	        </div>
        </div>

        <div class="col-lg-10" id="content">
          <div class="row">
            <div class="col-lg-8">

              <table class="table">
                <thead>
                  <tr>
                    <th style="width: 10px;">#</th>
                    <th>Title</th>
                    <th>Author</th>
										<th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($submissions as $key => $submission): ?>
                    <?php if(!null): ?>
                      <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $submission["title"]; ?></td>
												<td><?php echo getPostAuthorLName($submission["user_id"]) . " " . getPostAuthor($submission["user_id"]); ?></td>
                        <td><?php echo $submission["status"]; ?></td>
												<td>
                          <?php if ($submission["status"] != "Approved"): ?>
                            <a href="proposals.php?id=<?php echo $submission["id"]; ?>" class="btn btn-sm btn-primary">Approve</a>
                            <a href="edit.php?delete_id=<?php echo $submission['id']; ?>" class="btn btn-sm btn-danger">Decline</a>
                          <?php else: ?>
                            <a href="proposals.php?id=<?php echo $submission["id"]; ?>" class="btn no-touch btn-sm btn-primary" disabled>Approve</a>
                            <a href="edit.php?delete_id=<?php echo $submission['id']; ?>" class="btn btn-sm btn-danger" disabled>Decline</a>
                          <?php endif; ?>
                        </td>
                      </tr>
                    <?php else: ?>
                      <tr>
                        <td colspan="3">No proposal record found.</td>
                      </tr>
                    <?php endif; ?>
									<?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="col-lg-2">
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