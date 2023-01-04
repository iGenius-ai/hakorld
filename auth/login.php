<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:title" content="Black Hat">
		<meta property="og:description" content="">
		<meta property="og:image" content="https://www.blackhat.com/images/page-graphics/metatag/logo-2018.png">

    <title>Hakorld - Login</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
  </head>
  <body>
    <div class="container">
    	<div class='row' id="header-container">
				<div id='header' class='span12 asia-logo'>
					<div class='pull-right text-right' id='user-info'>
						<h1>AUTHENTICATION</h1>
					</div>
				</div>
			</div>

   		<div class='row'>
				<div class='col-lg-10' id='content'>

					<noscript>
						<div class="alert alert-danger" role="alert">
							<h4><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>JavaScript support is disabled in your browser. This application requires it to be enabled. </h4>
						</div>
					</noscript>

					<form action="/register" id="newaccount" method="post" class="form-horizontal">

						<div class='fieldset form-horizontal'>
							<legend>Create Account</legend>
						</div>
	
						<div class="form-group">
							<label for="email" class="col-sm-3 control-label">Email*:</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="email" name="email" />
								<p class="help-block">Required</p>
							</div>
						</div>
	
						<div class="form-group">
							<label for="email_again" class="col-sm-3 control-label">Confirm Email*:</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="email_login" name="email_again" />
								<p class="help-block">Confirm your email</p>
							</div>
						</div>
	
						<div class="form-group">
							<label for="password" class="col-sm-3 control-label">Password*:</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" id="password" name="password" />
								<p class="help-block">Required. Password must contain at least 8 characters consisting of upper/lower case letters and numbers or the following characters: !,@,*,$,#,&,%</p>
							</div>
						</div>
	
						<div class="form-group">
							<label for="password_again" class="col-sm-3 control-label">Confirm Password*:</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" id="password_again" name="password_again" />
								<p class="help-block">Required</p>
							</div>
						</div>

						<div class="form-group">
							<label for="nameFirst" class="col-sm-3 control-label">First Name*:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="nameFirst" />
								<p class="help-block">Required</p>
							</div>
						</div>
  
						<div class="form-group">
							<label for="nameLast" class="col-sm-3 control-label">Last Name*:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="nameLast" />
								<p class="help-block">Required</p>
							</div>
						</div>
	
						<div class="form-group">
							<label for="phone" class="col-sm-3 control-label">Phone*:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="phone" />
								<p class="help-block">Required</p>
							</div>
						</div>
	
						<div class="form-group">
							<label for="title" class="col-sm-3 control-label">Title:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="title" />
							</div>
						</div>
	
						<div class="form-group">
							<label for="company" class="col-sm-3 control-label">Company:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="company" />
							</div>
						</div>
	
						<input type="hidden" name="token" value="a48dc1c3ac31d595f308df0539b20be7068defcf|1672834518" />
						<input type="hidden" name="postsubmit" value="1" />
	
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<a href="#" id="submitBtn"  class="btn btn-large btn-primary">Create Account</a>
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
					<a href="https://www.blackhat.com">home</a>/
					<a href="http://blackhat.com/html/archives.html">archives</a>/
					<a href="http://blackhat.com/html/about.html">about</a>/
					<a href="http://blackhat.com/html/contact.html">contact</a>
				</div>

				<div class="copyright">
					<p>
						(2023 black hat &trade;) an Informa Tech company // <a target="_blank" href="https://www.informatech.com/about-us">about informa tech</a>
					</p>
				</div>
			</div>
		</div>

	  <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.complexify.js"></script>
    <script src="assets/js/register.js"></script>
  	<script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>