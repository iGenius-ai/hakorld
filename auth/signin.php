<?php 
	include("../path.php");
	include(ROOT_PATH . "/app/database/db.php");
	include(ROOT_PATH . "/app/controllers/users.php"); 
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

    <title>Hakorld - Authenticate</title>
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
						<div class="cfp-image">
						  <img src="../assets/images/cfp.png">
					  </div>
					</div>
		    </div>
	    </div>

      <div class="row">
	      <div class="col-lg-6">
					<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
						<strong>The Hakorld 2023 Briefings Call for Papers is open.</strong><br>
					</span><br>
					<span style="text-decoration: underline; font-size: 12pt;" data-mce-style="text-decoration: underline; font-size: 12pt;">
						<strong>Important Dates</strong>
					</span><br>
					<ul>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">Call for Papers Closes: January 12, 2023 
								<span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(11:59 pm SGT-Singapore Time)</span>
							</span>
						</li>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">Notification to Submitters: end of March 2023</span>
						</li>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">Briefings Dates/Location: May 11-12, 2023 
								<span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(Marina Bay Sands, Singapore)</span>
							</span>
						</li>
					</ul><br>
					
					<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
						<span style="text-decoration: underline;" data-mce-style="text-decoration: underline;">
							<strong>Your Account:</strong>
						</span>
					</span><br>
					
					<ul>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
								If this is your first time submitting to a Black Hat conference, please create a new account 
								<span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">
									(scroll to the bottom of the page and select the blue "sign-up" button). 
								</span>
							</span>
						</li>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
								If you have submitted to a Black Hat conference within the last two years, please use your 
								previously created credentials to log in.
							</span>
						</li>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
								Once you have logged in, select the blue "Submit a new proposal" button to begin.
							</span>
						</li>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
								Next, select the blue "add a new speaker" button to add a speaker or contributor to the proposal.
							</span>
						</li>
					</ul><br>
					
					<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
						<strong><span style="text-decoration: underline;" data-mce-style="text-decoration: underline;">Tips:</span></strong>
					</span><br>
					
					<ul>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
								<strong>Click <a style="outline: none;" href="https://www.blackhat.com/call-for-papers.html" data-mce-href="https://www.blackhat.com/call-for-papers.html" data-mce-style="outline: none;">here </a>for Recommendations and Sample Submissions</strong>
								<span style="text-decoration: underline;" data-mce-style="text-decoration: underline;"><strong><br></strong></span>
							</span>
						</li>
					</ul><br>
					
					<span style="text-decoration: underline; font-size: 12pt;" data-mce-style="text-decoration: underline; font-size: 12pt;">
						<strong>Please be prepared to provide the following information during the submission process:<br></strong>
					</span>
					<ul>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>About the Speaker(s)/Contributor(s):</strong></span>
							<ul>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Name</strong></span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Display Name </strong>
										<span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">
											(optional, leave this field blank if you don't want to enter a handle)
										</span>
									</span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Email </strong>
										<span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">
											(must use a unique e-mail address for each speaker/contributor) 
										</span>
									</span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Title &amp; Organization</strong> 
										<span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(Example: Security Researcher, XYZ Company.)</span>
									</span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Country &amp; State/Province</strong> 
										<span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">
											(Where the speaker/contributor currently resides. State/province required for US/Canada Only.) 
										</span>
									</span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Twitter Username</strong> 
										<span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(optional)</span>
									</span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Biography </strong></span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
										<strong>Have they previously spoken at Black Hat and if so, when?</strong>
									</span>
								</li>
							</ul>
						</li>
					</ul><br>
					
					<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
						When done completing this section, click on the blue "<strong>Add speaker</strong>" button.
					</span><br><br><br>
					
					<ul>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>About the Session:</strong></span>
							<ul>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Title</strong> 
										<span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">
											(Tip: The system <span style="background-color: initial; font-weight: normal;" data-mce-style="background-color: initial; font-weight: normal;"> 
											does not allow double quotes (") in titles, use single quotes ('), if desired.)</span>
										</span>
									</span>
								</li>
								<li>
									<strong style="font-size: 12pt; background-color: initial; font-style: normal;" data-mce-style="font-size: 12pt; background-color: initial; font-style: normal;">Track </strong>
									<span style="font-size: 10pt; background-color: initial;" data-mce-style="font-size: 10pt; background-color: initial;">
										(Primary Track. Tip: Track descriptions are available here: https://www.blackhat.com/html/tracks-asia.html)
									</span>
								</li>
								<li>
									<strong style="font-size: 12pt; background-color: initial; font-style: normal;" data-mce-style="font-size: 12pt; background-color: initial; font-style: normal;">Secondary </strong>
									<span style="font-size: 10pt; background-color: initial;" data-mce-style="font-size: 10pt; background-color: initial;">(Secondary Track - optional)</span>
								</li>
								<li>
									<strong style="font-size: 12pt; background-color: initial; font-style: normal;" data-mce-style="font-size: 12pt; background-color: initial; font-style: normal;">Format </strong><span style="font-size: 10pt; background-color: initial;" data-mce-style="font-size: 10pt; background-color: initial;">(30-Minutes or 40-Minutes)</span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Why Did You Select the Above Track(s) for your Submission? </strong><span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(To assist the Review Board in determining if your talk has been assigned to the proper track, briefly explain your reasoning behind your selection. The Review Board may reassign a submission to a different track if needed.)</span></span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Abstract </strong><span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(</span></span><span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">Provide a concise, yet detailed description of your presentation, 300 word max. <strong>The abstract will be published on the Black Hat Website if your submission is selected.)</strong></span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Presentation Outline </strong><span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(</span></span><span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">Show the progression of your presentation. Submissions that include <span style="text-decoration: underline;" data-mce-style="text-decoration: underline;">detailed </span>outlines score higher. Please note: This field will display plain text only, add line breaks as necessary for easy reading by the Review Board.)</span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Is this content 100% new, never before published/presented? </strong><span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(</span></span><span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">If no, explain what's new and what's already been published/presented and where. Provide conference/publication name, date published and a URL to any presentations or videos of the talk.)</span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>What new research, concept, technique, or approach is included in your submission? </strong><span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(Describe what is new or ground-breaking about your research.)</span></span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Takeaways<span style="font-size: 10pt;" data-mce-style="font-size: 10pt;"> </span></strong><span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(What are three actionable takeaways included in your presentation?)</span></span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>If applicable, what problem does your research solve?</strong></span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Will you be releasing a new tool? </strong> <span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(If yes, is the new tool open-source or commercial?)</span></span>
								</li>
								<li>
									<strong style="font-size: 12pt; background-color: initial; font-style: normal;" data-mce-style="font-size: 12pt; background-color: initial; font-style: normal;">Is this a new vulnerability? </strong><span style="font-size: 10pt; background-color: initial;" data-mce-style="font-size: 10pt; background-color: initial;">(If yes, have you disclosed this vulnerability to the affected vendor? If you have not, where are you in the disclosure process?)</span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Will your presentation include a demo?</strong> <span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(yes or no)</span></span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>If selected, who will present the session and in what format?</strong> <span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(If you have listed several speakers/contributors in your submission, let us know who would actually be presenting the talk if selected. We recommend no more than 2 speakers for a 30/40 minute session. Additional contributors listed in the submission will receive recognition on the Black Hat Website and will receive a complimentary Briefings pass.)</span></span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>If the designated speakers listed above are past Black Hat speakers, please provide the event year/location of their most recent talk.</strong> <span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(Example: Black Hat Asia 2021)</span></span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>So the Review Board is able to get a sense of their presentation styles, do you have a video sample of any previous conference presentations? </strong><span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(If yes, please provide a URL.)</span></span>
								</li>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Message for Review Board Only </strong><span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(Detail any special considerations that apply to your talk i.e. 0-day specifics, disclosure process, embargo, legalities, etc. including any assistance you may need preparing or on-site at the conference.)</span></span>
								</li>
							</ul>
						</li>
					</ul><br>
					
					<span style="text-decoration: underline; font-size: 12pt;" data-mce-style="text-decoration: underline; font-size: 12pt;">
						<strong>Saving Your Submission:</strong>
					</span><br>
					<ul>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">When you select the "Submit Proposal" Button, your proposal is transmitted to the Review Board for review and scoring. <span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(If your submission is not complete and you want to return later to complete it, simply add DRAFT-NOT FINAL in front of the session title. You can then return prior to January 12th to complete your submission. Be sure to remove "DRAFT-NOT FINAL" from the title when the submission is complete.)</span></span>
						</li></ul><br><span style="text-decoration: underline; font-size: 12pt;" data-mce-style="text-decoration: underline; font-size: 12pt;"><strong>Submission Requirements</strong></span><br><ul>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">Submissions may only be entered by researchers/speakers <span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(no submissions from PR firms/marketing representatives).</span></span>
						</li>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">Black Hat does not accept product or vendor-related pitches. Black Hat will disqualify any product/vendor pitch.</span>
						</li>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">Submissions must clearly detail the concepts, ideas, findings, and solutions the speaker/speaking team plans to present.</span>
						</li>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">Submissions that highlight new research, tools, vulnerabilities, etc. will be given priority.</span>
						</li>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">Submissions that include White Papers are highly encouraged and will also be given priority. <span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(The file upload field only accepts .txt files. If your file is not compatible, provide a link to the file in the "Message for Review Board Only" field.)</span></span>
						</li>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">Black Hat will disqualify incomplete submissions; complete your submission in its entirety before January 12th.</span>
						</li>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">Each submission must include detailed biographies of the proposed speaking team and a unique e-mail address for each speaker/contributor.</span>
						</li>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">All applicants must read and agree to the Call for Papers Terms prior to making a submission. The terms are located <a style="outline: none;" href="https://www.blackhat.com/call-for-papers.html#terms" data-mce-href="https://www.blackhat.com/call-for-papers.html#terms" data-mce-style="outline: none;">here</a>.</span>
						</li>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">Submission text fields <span style="font-size: 10pt;" data-mce-style="font-size: 10pt;">(abstract, presentation outline, etc.)</span> will display plain text only. Please assist the reviewers by adding line breaks as necessary, to make the text easier to read.</span>
						</li>
					</ul><br><br>
					<span style="text-decoration: underline; font-size: 12pt;" data-mce-style="text-decoration: underline; font-size: 12pt;">
						<strong>FAQs</strong>
					</span><br>
			
					<ul>
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
								<strong>Can I submit my research to other conferences/publications? / I have submitted my research to another 
								conference and have now been selected, do I need to notify Black Hat?</strong>
							</span>
							<ul>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
										Although the Review Board prefers new, never before presented research, previously presented research is 
										not automatically disqualified from consideration. Simply provide the relevant information when answering 
										the question "Is this content 100% new, never before published/presented ?" during the submission process. 
									</span>
								</li>
							</ul>
						</li>
						
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Can I submit more than one proposal?</strong></span>
							<ul>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
										Yes, but each proposal must be submitted via a separate submission form.
									</span>
								</li>
							</ul>
						</li>
						
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>Can I submit files (whitepaper, slides, etc.)?</strong></span>
							<ul>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
										Yes, but for security reasons, the "File Upload" field only accepts plain text documents. If your file/whitepaper 
										is not compatible with this format, please provide a link to the file in the "Message for Review Board Only" field.
									</span>
								</li>
							</ul>
						</li>
						
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>How do I know that you received my submission?</strong> </span>
							<ul>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
										The submitter will receive an email notification within 24 hours from noreply@email.hakorld.com. 
										If you do not, first check your spam/junk folder and then e-mail cfp@hakorld.com
									</span>
								</li>
							</ul>
						</li>
						
						<li>
							<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong>How many speakers can present a talk?</strong></span>
							<ul>
								<li>
									<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
										It is highly recommended that no more than 2 speakers present the talk. Please note that even if all 
										members of a research team are not able to present, they will receive recognition on the Hakorld website 
										and a complimentary Briefings pass as long as they are listed on the original Call for Papers submission.
									</span>
								</li>
							</ul>
						</li>
					</ul><br><br>
					<span style="font-size: 12pt;" data-mce-style="font-size: 12pt;">
						Thank you for taking the time to submit your research/proposed talk to Black Hat. <br><br>
						If you have any questions or encounter issues, please email us at <strong>cfp@blackhat.com<br><br></strong>
					</span>				
				  
					<p>
		        <b><a href="register.php">Signup</a></b> to get started.
		      </p>
          <h4>No account? Then <a href="register.php" class="btn btn-lg btn-primary">Sign-up</a></h4>

	      </div>

	      <div class="col-lg-6">
		      <form accept-charset="UTF-8" action="signin.php" class="form-signin new_user" id="new_user" method="POST">
		        <fieldset>
		          <legend>Login</legend>
              <label class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control" value="<?php $email; ?>" name="email" placeholder="Email address" required="" autofocus="">
              <label  class="sr-only">Password</label>
              <input type="password" id="inputPassword" value="<?php echo $password; ?>" name="password" class="form-control" placeholder="Password" required="">

              <button class="btn btn-lg btn-primary btn-block" name="signinBtn" type="submit">Sign in</button>
              <br>
              <a href="https://asia-briefings-cfp.blackhat.com/forgotpassword">Forgot your password?</a>
            </fieldset>
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