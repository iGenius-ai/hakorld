<?php 
	include("../path.php");
	include(ROOT_PATH . "/app/database/db.php");
	// include(ROOT_PATH . "/app/controllers/users.php");
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

    <title>Hakorld - Paper Submission</title>
    <link href="../auth/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../auth/assets/css/styles.css" rel="stylesheet">
    <link href="../auth/assets/css/comments.css" rel="stylesheet">
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
          <p>
            Please fill out this form in its entirety. Portions of your submission, if selected, will be used in web and printed materials for the conference. You will be allowed to attach files relevant to your proposed talk after it is submitted.
          </p>
          <legend>Proposal Status: New</legend>

					<form id="saveSubmission" action="submit.php" method="POST" class="form-horizontal" enctype="multipart/form-data">

						<div class="fieldset form-horizontal">
							<legend>All Fields Required</legend>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Title</label>
							<div class="col-sm-9">
								<input type="text" name="title" value="<?php echo $title; ?>" class="form-control form-field">
								<p class="help-block"></p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">Track</label>
							<div class="col-sm-9">
								<select name="track" value="<?php echo $track; ?>" class="form-control form-field">
									<option>N/A</option>
									<option value="aiml">AI, ML, &amp; Data Science</option>
									<option value="appse">Application Security</option>
									<option value="plat">Cloud &amp; Platform Security</option>
									<option value="crypt">Cryptography</option>
									<option value="cyber">Cyber-Physical Systems</option>
									<option value="data">Data Forensics &amp; Incident Response</option>
									<option value="defen">Defense</option>
									<option value="enter">Enterprise Security</option>
									<option value="expl">Exploit Development</option>
									<option value="hard">Hardware / Embedded Systems</option>
									<option value="human">Human Factors</option>
									<option value="lesson">Lessons Learned</option>
									<option value="malw">Malware</option>
									<option value="mobi">Mobile Development</option>
									<option value="netw">Network Security</option>
									<option value="rever">Reverse Engineering</option>
								</select>
								<p class="help-block"></p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Secondary</label>
							<div class="col-sm-9">
								<select name="secondary" value="<?php echo $secondary; ?>" class="form-control form-field">
									<option value="">N/A</option>
									<option value="1879">AI, ML, &amp; Data Science</option>
									<option value="1831">Application Security</option>
									<option value="1880">Cloud &amp; Platform Security</option>
									<option value="1896">Community &amp; Career</option>
									<option value="1768">Cryptography</option>
									<option value="1882">Cyber-Physical Systems</option>
									<option value="1883">Data Forensics &amp; Incident Response</option>
									<option value="1769">Defense</option>
									<option value="1897">Enterprise Security</option>
									<option value="1770">Exploit Development</option>
									<option value="1887">Hardware / Embedded</option>
									<option value="1773">Human Factors</option>
									<option value="1895">Lessons Learned</option>
									<option value="1802">Malware</option>
									<option value="1759">Mobile</option>
									<option value="1884">Network Security</option>
									<option value="1828">Policy</option>
									<option value="1898">Privacy</option>
									<option value="1779">Reverse Engineering</option>
								</select>
								<p class="help-block"></p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">Format</label>
							<div class="col-sm-9">
								<select name="format" value="<?php echo $format; ?>" class="form-control form-field">
									<option value="">N/A</option>
									<option value="5574">30-Minute Briefings</option>
									<option value="5575">40-Minute Briefings</option>
								</select>
								<p class="help-block"></p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">1. Why Did You Select the Above Track for your Submission?</label>
							<div class="col-sm-9">
								<textarea name="tracksubmitreason" class="proposalText form-field"><?php echo $tracksubmitreason; ?></textarea>
								<p class="help-block">
									To assist the Review Board in determining if your talk has been assigned to the proper track, briefly explain your reasoning behind your track selection.  (Please note that the Review Board may reassign a submission to a different track if needed.)
								</p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">2. Abstract</label>
							<div class="col-sm-9">
								<textarea name="abstract" class="proposalText form-field"><?php echo $abstract; ?></textarea>
								<p class="help-block">
									Provide a concise, yet detailed description of your presentation (300 word maximum). Accepted talk abstracts will be published on Black Hat’s website and in other materials.
								</p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">3. Presentation Outline</label>
							<div class="col-sm-9">
								<textarea name="outline" class="proposalText form-field"><?php echo $outline; ?></textarea>
								<p class="help-block">
									Show the progression of your presentation. Submissions that include detailed outlines score higher. (This field will display plain text only. Add line breaks as necessary, for easy reading by our Review Board.)
								</p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">4. Is this content 100% new, never before published/presented?</label>
							<div class="col-sm-9">
								<?php if (empty($newcontent)): ?>
									<input type="checkbox" name="newcontent" class="form-field">
								<?php else: ?>
									<input type="checkbox" name="newcontent" class="form-field" selected>
								<?php endif; ?>
								<p class="help-block">
									If YES, click the checkbox above and skip to question 6.  
									If NO, answer question 5.
								</p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">5. If no, explain what's new and what's already been published/presented and where.</label>
							<div class="col-sm-9">
								<textarea name="oldcontent" class="proposalText form-field"><?php echo $oldcontent; ?></textarea>
								<p class="help-block">
									If you have previously published/presented this research or any portion of this talk, what (if anything) will you be presenting at Black Hat Asia that is new/never before published/presented?   

									If the information has been previously published/presented, provide the conference or publication name, date and URL.  Include a URL to any presentation materials or video of the talk as well.
								</p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">6. What new research, concept, technique, or approach is included in your submission?</label>
							<div class="col-sm-9">
								<textarea name="newresearch" class="proposalText form-field"><?php echo $newresearch; ?></textarea>
								<p class="help-block">Describe what is new or ground-breaking about your research. </p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">7. Takeaways</label>
							<div class="col-sm-9">
								<textarea name="takeaways" class="proposalText form-field"><?php echo $takeaways; ?></textarea>
								<p class="help-block">What are three actionable takeaways included in your presentation?</p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">8. If applicable, what problem does your research solve?</label>
							<div class="col-sm-9">
								<textarea name="solveproblem" class="proposalText form-field"><?php echo $solveproblem; ?></textarea>
								<p class="help-block"></p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">9. Will you be releasing a new tool? </label>
							<div class="col-sm-9">
							<?php if (empty($newtool)): ?>
									<input type="checkbox" name="newtool" class="form-field">
								<?php else: ?>
									<input type="checkbox" name="newtool" class="form-field" selected>
								<?php endif; ?>
								<p class="help-block">
									If YES, click the checkbox above and answer question 10.
									If NO, do not click the checkbox above and skip to question 11.
								</p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">10. If yes, is the tool open source or commercial?</label>
							<div class="col-sm-9">
								<input type="text" name="tooloption" value="<?php echo $tooloption; ?>" class="form-control form-field">
								<p class="help-block">
									If you will be releasing a new tool, is the tool Open Source or Commercial?
								</p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">11. Is this a new vulnerability?</label>
							<div class="col-sm-9">
								<?php if (empty($newvulnerable)): ?>
									<input type="checkbox" name="newvulnerable" class="form-field">
								<?php else: ?>
									<input type="checkbox" name="newvulnerable" class="form-field" selected>
								<?php endif; ?>
								<p class="help-block">
									If YES, click the checkbox above and answer question 12.
									If NO, do not click the checkbox above and skip to question 14.
								</p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">12. If this is a new vulnerability, have you disclosed this vulnerability to the affected vendor(s)?</label>
							<div class="col-sm-9">
								<?php if (empty($disclosevulnerable)): ?>
									<input type="checkbox" name="disclosevulnerable" class="form-field">
								<?php else: ?>
									<input type="checkbox" name="disclosevulnerable" class="form-field" selected>
								<?php endif; ?>
								<p class="help-block">
									If YES, click the checkbox above and skip to question 14.
									If NO, do not click the checkbox and answer question 13.
								</p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">13. If you have not disclosed the vulnerability to the affected vendor(s), where are you in the disclosure process?</label>
							<div class="col-sm-9">
								<textarea name="discloseprocess" class="proposalText form-field"><?php echo $discloseprocess; ?></textarea>
								<p class="help-block"></p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">14. Will your presentation include a demo? </label>
							<div class="col-sm-9">
								<?php if (empty($demo)): ?>
									<input type="checkbox" name="demo" class="form-field">
								<?php else: ?>
									<input type="checkbox" name="demo" class="form-field" selected>
								<?php endif; ?>
								<p class="help-block">
									If YES, click the checkbox above.
									If NO, do not click the checkbox.
								</p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">15. If selected who will present the session and in what format?</label>
							<div class="col-sm-9">
								<textarea name="presenter" class="proposalText form-field"><?php echo $presenter; ?></textarea>
								<p class="help-block">
									If selected, who will present the session and how? (We recommend no more than 2 speakers. Additional contributors who are not presenting will receive credit on the Black Hat Website.) Format options: in-person or virtual/remote.
								</p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">16. If the designated speaker(s) listed above is/are past Black Hat speaker(s), please provide the event year/location of their most recent talk.</label>
							<div class="col-sm-9">
								<textarea name="event" class="proposalText form-field"><?php echo $event; ?></textarea>
								<p class="help-block">Example: Black Hat USA 2019</p>
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label">17. So the Review Board can get a sense of the speaker(s) presentation style(s), submit a URL to a video sample of a previous conference presentation (if available).</label>
							<div class="col-sm-9">
								<input type="text" name="videosample" value="<?php echo $videosample; ?>" class="form-control form-field">
								<p class="help-block">If applicable, please provide a URL.</p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">18. Message for Review Board Only</label>
							<div class="col-sm-9">
								<textarea name="reviewmessage" class="proposalText form-field"><?php echo $reviewmessage; ?></textarea>
								<p class="help-block">
									Detail any special considerations that apply to your talk (i.e. 0-day specifics, disclosure process, security embargo, legalities, etc.) including any assistance you may need preparing for the talk or on-site at the conference. This information will not be published and will only be seen by the Review Board.
								</p>
							</div>
						</div>

						<div class="fieldset form-horizontal">
							<legend>Upload Files and Documents</legend>
						</div>
						<a name="fileupload"></a>
						<div class="div alert alert-info">
							<div class="row">
								<div class="col-md-6">
									<h4>Upload Instructions</h4>
									<p>
										File name must only contain alphanumeric characters.<br>
										<strong>Max file size:</strong> 64Mb<br>
										<strong>Allowed file format and extensions:</strong> Documents and PDFs
									</p>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Select a file:</label>
										<input type="file" name="fileupload" value="<?php echo $fileupload; ?>">
									</div>
									<br><br>
								</div>
							</div>
						</div>

						<div class="div alert alert-info">
		          <h4 class="alert-heading">Submission Agreement</h4>
		          <p>
		            Please be sure to check out the <strong><a href="https://www.blackhat.com/call-for-papers.html#terms" target="_blank"> Terms and Conditions, </a></strong> for submissions to this event.
		          </p>
		          <div class="fieldset form-inline">
		            <div class="control-group">
		              <label>
										<?php if (empty($accepts)): ?>
											<input type="checkbox" name="accepts">
										<?php else: ?>
											<input type="checkbox" name="accepts" selected>
										<?php endif; ?>
		                <b>Yes, I have read the Terms and Conditions.</b>
		              </label>
		            </div>
		          </div>
				      <br>

		          <button type="submit" name="submit-proposal" id="submitProposalBtn" class="btn btn-primary">Submit Proposal</button>
				      <br>
		          <div style="color:#a94442">
		            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span><strong>Please ensure that you have added at least a speaker before you submit the proposal.</strong>
		          </div>
			      </div>

					</form>

	        <div class="fieldset form-horizontal">
	          <legend>Feedback Messages</legend>
	        </div>
		      <div class="div alert alert-info">
		        <p>In this section, you may receive feedback messages from the Review Board.</p>
	        </div>
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