<?php
	include("../path.php");
	include(ROOT_PATH . "/app/database/db.php");
	// include(ROOT_PATH . "/app/controllers/users.php"); 
	include(ROOT_PATH . "/app/controllers/speakers.php"); 

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

    <title>Hakorld - Add Speaker</title>
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
							<li class="inactive">
								<a href="../logout.php" accesskey="l" data-method="post" rel="nofollow"><u>L</u>ogout</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-10" id="content">

					<form method="POST" action="addSpeaker.php" class="form-horizontal">

						<div class="fieldset form-horizontal">
							<legend>Add Speaker</legend>
						</div>

						<div class="form-group">
							<label for="first_name" class="col-sm-3 control-label">First Name*:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $first_name; ?>" name="first_name" value="">
							</div>
						</div>
						
						<div class="form-group">
							<label for="last_name" class="col-sm-3 control-label">Last Name*:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $last_name; ?>" name="last_name">
							</div>
						</div>

						<div class="form-group">
							<label for="nameDisplay" class="col-sm-3 control-label">Display Name:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $nameDisplay; ?>" name="nameDisplay">
								<p class="help-block">Optional - This field is if you want to use a handle (e.g. Crash Override, or Zero Cool) instead of your full name.</p>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="col-sm-3 control-label">Email*:</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" value="<?php echo $email; ?>" name="email">
							</div>
						</div>
						
						<div class="form-group">
							<label for="phone" class="col-sm-3 control-label">Phone:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $phone; ?>" name="phone">
							</div>
						</div>
						
						<div class="form-group">
							<label for="title" class="col-sm-3 control-label">Title*:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $title; ?>" name="title">
							</div>
						</div>
						
						<div class="form-group">
							<label for="company" class="col-sm-3 control-label">Organization*:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $organization; ?>" name="organization">
								<p class="help-block">Required - Independent researchers who do not have a company affiliation may enter "\ &amp;nbsp;" in the organization field</p>
							</div>
						</div>
	
						<!-- country & states -->
						<div class="form-group">
							<label for="title" class="col-sm-3 control-label">Country*:</label>
							<div class="col-sm-9">
								<select name="country" class="form-control" value="<?php echo $country; ?>" id="country">
									<option value="">Nigeria</option>
									<option value="">United Kingdom</option>
									<option value="">United States</option>
								</select>
								<!--<p class="help-block">Required</p>-->
							</div>
						</div>
						<div class="form-group">
							<label id="streq" for="title" class="col-sm-3 control-label">State / Province<span id="state-required-toggle"></span>:</label>
							<div class="col-sm-9">
								<input type="text" name="usStateSelect" class="form-control" value="<?php echo $usStateSelect; ?>" size="25">
								<!--<p class="help-block">Required</p>-->
								<p class="help-block" id="stateRequiredHelpText">
									Required for US/Canada Only
								</p>
							</div>
						</div>

						<!-- country & states -->
						<div class="form-group">
							<label for="twitter" class="col-sm-3 control-label">Twitter Username:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $twitter; ?>" name="twitter">
							</div>
						</div>
						
						<div class="form-group">
							<label for="website" class="col-sm-3 control-label">Website URL:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $website; ?>" name="website">
							</div>
						</div>

						<div class="form-group">
							<label for="linkedinUrl" class="col-sm-3 control-label">LinkedIn URL:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="<?php echo $linkedinUrl; ?>" name="linkedinUrl">
							</div>
						</div> 
									
						<div class="form-group">
							<label for="bio" class="col-sm-3 control-label">Bio*:</label>
							<div class="col-sm-9">
								<textarea name="bio" class="proposalText"><?php echo $bio; ?></textarea>
								<p class="help-block">Plain text only.</p>
							</div>
						</div>
						
						<div class="form-group">
							<label for="notes[previously_presented]" class="col-sm-3 control-label">Have you previously spoken at Black Hat ?</label>
							<div class="col-sm-9">
								<select name="prevPresent" class="form-control" value="<?php echo $prevPresent; ?>">
									<option value="">-- select option --</option>
									<option value="">Yes</option>
									<option value="">No</option>
								</select>
							</div>
						</div>
	
						<div class="form-group">
							<label for="badge_name" class="col-sm-3 control-label">Badge Name:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="badge_name" value="<?php echo $badge_name; ?>">
							</div>
						</div>
						
						<div class="form-group">
							<label for="badge_org" class="col-sm-3 control-label">Badge Org:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="badge_org" value="<?php echo $badge_org; ?>">
							</div>
						</div>
						
						<div class="form-group">
							<label for="cissp" class="col-sm-3 control-label">CISSP:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="cissp" value="<?php echo $cissp; ?>">
							</div>
						</div>
	
						<div class="form-group">
							<label for="meal" class="col-sm-3 control-label">Meal Preference:</label>
							<div class="col-sm-9">
								<select name="meal" class="form-control" value="<?php echo $meal; ?>">
									<option value="0">None</option>
									<option value="1">Vegetarian</option>
									<option value="2">Kosher</option>
									<option value="3">Halal</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" name="addSpeaker" class="btn btn-large btn-primary">Add Speaker</button>
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