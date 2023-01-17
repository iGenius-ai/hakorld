<?php 
	include("../path.php");
	include(ROOT_PATH . "/app/database/db.php");
	include(ROOT_PATH . "/app/controllers/users.php"); 

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

    <title>Hakorld - Account</title>
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
		            <a href="submissions.php" accesskey="s"><u>S</u>ubmissions</a>
		          </li>
		          <li class="active">
		            <a href="account.php?id=<?php echo $_SESSION['id'] ?>" accesskey="m"><u>M</u>y account</a>
		          </li>
		          <li class="inactive">
		            <a href="../logout.php" accesskey="l" data-method="post" rel="nofollow"><u>L</u>ogout</a>
		          </li>
		        </ul>
	        </div>
        </div>
        
        <div class="col-lg-10" id="content">
          <h5>To edit your details, please click on the <strong>My Account</strong> button first.</h4>
          <form action="account.php?id=<?php echo $user['id']; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
	          <div class="fieldset form-horizontal">
		          <legend>My Account</legend>
	          </div>
            <input type="hidden" name="id" value="<?php echo $id ?>" required>
	          <div class="form-group">
		          <label for="email" class="col-sm-3 control-label">Email:</label>
		          <div class="col-sm-9">
                <p class="block">Current Email: <strong><?php echo $_SESSION['email']; ?></strong></p>
                <input type="email" class="form-control" value="<?php echo $email?>" name="email">
                <p class="help-block">Required</p>
              </div>
            </div>

            <div class="form-group">
              <label for="nameFirst" class="col-sm-3 control-label">First Name:</label>
              <div class="col-sm-9">
                <p class="block">Current First Name: <strong><?php echo $_SESSION['firstname']; ?></strong></p>
                <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>">
                <p class="help-block">Required</p>
              </div>
            </div>
            
            <div class="form-group">
              <label for="nameLast" class="col-sm-3 control-label">Last Name:</label>
              <div class="col-sm-9">
                <p class="block">Current Last Name: <strong><?php echo $_SESSION['lastname']; ?></strong></p>
                <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>">
                <p class="help-block">Required</p>
              </div>
            </div>
            
            <div class="form-group">
              <label for="phone" class="col-sm-3 control-label">Phone:</label>
              <div class="col-sm-9">
                <p class="block">Current Phone: <strong><?php echo $_SESSION['phone']; ?></strong></p>
                <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                <p class="help-block">Required</p>
              </div>
            </div>
            
            <div class="form-group">
              <label for="title" class="col-sm-3 control-label">Title:</label>
              <div class="col-sm-9">
                <p class="block">Current Title: <strong><?php echo $_SESSION['title']; ?></strong></p>
                <input type="text" class="form-control" name="title" value="<?php echo $title; ?>">
              </div>
            </div>
            
            <div class="form-group">
              <label for="company" class="col-sm-3 control-label">Company:</label>
              <div class="col-sm-9">
                <p class="block">Current Company: <strong><?php echo $_SESSION['company']; ?></strong></p>
                <input type="text" class="form-control" name="company" value="<?php echo $company; ?>">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <button name="updateUser" id="submitBtn" class="btn btn-large btn-primary">Update Account</button>
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