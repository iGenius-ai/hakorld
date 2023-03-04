<?php
  include("path.php");
	include(ROOT_PATH . "/app/database/db.php");
	// include(ROOT_PATH . "/app/controllers/users.php"); 
	include(ROOT_PATH . "/app/controllers/courses.php"); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
	  <!-- Basic Page Needs ================================================== -->
	  <meta charset="utf-8">
	  <meta name="description" content="Get the latest updates concerning Hakorld and the next Hakorld Conference!">
	  <meta name="author" content="The Dark Tangent">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS ================================================== -->
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/skeleton.css">
    <link rel="stylesheet" href="dc-css/layout.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Favicons =============================================== -->
    <link rel="shortcut icon" href="../../images/favicon.ico">
    <link rel="apple-touch-icon" href="../../images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../images/apple-touch-icon-114x114.png">

    <title>Hakorld &reg; - Tutorials</title>
  </head>
  <body class="alt">

	  <!-- Primary Page Layout ================================================== -->
	  <div class="container">
      <div id="skiptocontent"><a href="#maincontent">skip to main content</a></div>
      <header class="sixteen columns header">
        <h1>Hakorld Hacking Conference</h1>
      </header>
      <a id=skipLink></a>
      <h2 class="pageTitle uppercase">Tutorials</h2>
    
      <nav class="sixteen columns navholder">
        <ul id="firstItem" class="nav">
          <li><a href="/index.html">Home</a></li>
        </ul>
        <ul id="secItem" class="nav">
          <li><a href="/html/links/dc-news.html">Recent News</a></li>
        </ul>
        <ul id="thirdItem" class="nav">
          <li class="multi"><a href="#">Archives &raquo;</a>
            <ul class="subNav">
              <li><a href="tutorials.php">Tutorials</a></li>
              <li><a href="/html/links/dc-torrent.html">File Downloads</a></li>
              <li><a href="/html/links/dc-ctf.html">CTF Archive</a></li>
              <li><a href="/html/links/dc-tools.html">Tools Released</a></li>
            </ul>
          </li>
        </ul>
        <ul id="fourthItem" class="nav"> 
          <li class="multi"><a href="#">About &raquo;</a>
            <ul class="subNav">
              <li><a href="/html/links/dtangent.html">The Dark Tangent</a></li>
              <li><a href="/html/links/dc-goons.html">Goons</a></li>
              <li><a href="/html/links/dc-goon-hof.html">Goon Hall of Fame</a></li>
              <li><a href="/html/links/dc-faq/dc-faq.html">FAQ</a></li>
              <li><a href="/html/links/dc-policy.html">Policies</a></li>
              <li><a href="/html/links/dc-contact.html">Contact</a></li>
              <li><a href="/html/links/dc-black-badge.html">Black Badge Hall of Fame</a></li>
            </ul>
          </li>
        </ul>
        <ul id="fifthItem" class="nav">
          <li class="multi"><a href="#">Community &raquo;</a>
            <ul class="subNav">
              <li><a href="https://discord.gg/defcon">Hakorld Discord</a></li>
              <li><a href="https://defcongroups.org/">Hakorld Groups</a></li>
              <li><a href="https://forum.defcon.org/">Hakorld Forums</a></li>
            </ul>
          </li>
        </ul>
        <ul id="sixthItem" class="nav">
          <li class="multi"><a href="#">Resources &raquo;</a>
            <ul class="subNav">
              <li><a href="https://media.defcon.org/">Media Server</a></li>
              <li><a href="/html/links/dc-torrent.html">File Downloads</a></li>
              <li><a href="/html/links/dc-speakerscorner.html">Speakers Corner</a></li>
              <li><a href="/html/links/book-list.html">Reading List</a></li>
              <li><a href="/html/links/movie-list.html">Movie List</a></li>
              <li><a href="/html/links/mailing-lists.html">Hacker Mailing Lists</a></li>
              <li><a href="/html/links/links-o-rama.html">Sites We Like</a></li>
            </ul>
          </li>
        </ul>
        <ul id="lastItem" class="nav">
          <li class="multi"><a href=""><span class="callStatusPending">SUBMIT!</span> &raquo;</a>        	
            <ul class="subNav">
              <li><a href="/html/defcon-31/dc-31-cfi.html">Call for Ideas</a></li>
            </ul>
          </li>
        </ul>
      </nav>

      <div class="sixteen columns" id="maincontent">

	      <aside class="one column social">
          <a href="#" title="Hakorld forums"><img class="socIcon" src="assets/images/dc-forums.png" alt="Hakorld forums" /></a> 
    	    <a href="#" title="Hakorld RSS Feed"><img class="socIcon" src="assets/images/sm-rss.png" alt="Hakorld RSS Feed" /></a>
          <a href="#" title="Hakorld Discord Server"><img class="socIcon" src="assets/images/discord-sm.webp" alt="Hakorld Discord Server" loading="lazy" decoding="async"/></a>
          <a href="#" title="DEFCON.Social"><img class="socIcon" src="assets/images/mastodon-logo.webp" alt="mastodon logo" loading="lazy" decoding="async"></a>
          <a href="#" title="Hakorld Twitter Feed"><img class="socIcon" src="assets/images/sm-twitter.webp" alt="Hakorld Twitter" loading="lazy" decoding="async" /></a>
          <a href="#" title="Hakorld Facebook Fan Page"><img class="socIcon" src="assets/images/sm-facebook.png" alt="Hakorld Facebook Page" /></a>
          <a href="#" title="Hakorld YouTube Page"><img class="socIcon" src="assets/images/sm-youtube.webp" alt="Hakorld YouTube Page" /></a>
          <a href="#"><img class="socIcon" src="assets/images/sm-instagram.png" alt="Instagram Logo"></a>
          <a href="#" title="Hakorld Subreddit"><img class="socIcon" src="assets/images/reddit.png" alt="Reddit logo" /></a>       
          <a href="#"><img class="socIcon" src="assets/images/canary.png" alt="Canary logo"></a>
		    </aside>
    
        <section class="nine columns omega">
    
          <!-- Courses Grid System -->
          <div class="courses__grid">
            <?php foreach ($courses as $key => $course): ?>
              <div class="course__item">
                <div class="flex">
                  <p class="uppercase"><strong>Trainings</strong></p>
                  <div>
                    <h5><a href="details.php?id=<?php echo $course["id"]; ?>" class="course__link">
                      <?php echo $course['course_title']; ?>
                    </a></h5>
                    <p class="uppercase">Ends <?php echo $course['course_date']; ?></p>
                  </div>
                </div>
                <div class="course__details">
                  <div>
                    <p><strong>Price:</strong> <strong style="margin-left: 0">$<?php echo $course['course_price']; ?></strong></p>
                    <p><strong>Track:</strong> <?php echo $course['course_track']; ?></p>
                    <p><strong>Format:</strong> <?php echo $course['course_format']; ?></p>
                    <p><strong>Skill Level:</strong> <?php echo $course['skill_level']; ?></p>
                    <p><strong>Experience:</strong> <?php echo $course['experience']; ?></p>
                  </div>
                  <img src="assets/images/call-ideas.webp" alt="">
                </div>
              </div>
            <?php endforeach; ?>
          </div>

	      </section>
    
        <!-- Right Sidebar ================================================== -->
        <aside class="six columns alpha rightSideBar">
          <article class="six columns">
            <h3 class="title">Hakorld Sites</h3>
            <div class="resource">
              <a href="https://forum.defcon.org/">
                  <img class="icons scale-with-grid" src="assets/images/dc-forums.png" alt="Link to Hakorld Forums" loading="lazy" decoding="async"><br>Forums
              </a>
              <a href="https://defcongroups.org/">
                <img class="icons scale-with-grid" src="assets/images/sm-groups.png" alt="Link to Hakorld Groups" loading="lazy" decoding="async"><br>Groups
              </a>
              <a href="https://media.defcon.org/">
                <img class="icons scale-with-grid" src="assets/images/dc-media.png" alt="Link to Hakorld Media Server" loading="lazy" decoding="async"><br>Media Server
              </a>
            </div>
           </article>
      
          <article class="six columns">
            <h3 class="title">The Goods</h3>
            <div class="two columns alpha resource">
              <a href="https://shop.defcon.org/"><img class="affiliate scale-with-grid" src="assets/images/swag-banner.webp" alt="Hakorld Store Logo" loading="lazy" decoding="async"></a>
              <a href="https://shop.defcon.org/">Official Swag</a>
            </div>
            <div class="two columns omega resource">
              <a href="https://www.defcononline.com/"><img class="affiliate scale-with-grid" src="assets/images/SOKLogo_2c.png" alt="Source of Knowledge Logo" loading="lazy" decoding="async"></a>
              <a href="https://www.defcononline.com/">Conference Recordings</a>
            </div>
          </article> 
      
          <article class="six columns">
            <h3 class="title">Past Media</h3>
              
            <div class="two columns alpha resource">
              <a href="https://defcon.org/html/links/dc-torrent.html">
                <img class="icons" src="assets/images/dc-torrents.png" alt="Link to Hakorld Pics"></a><a href="https://defcon.org/html/links/dc-torrent.html">Torrents Page
              </a>
            </div>
          
            <div class="two columns omega resource">
              <a href="https://media.defcon.org/">
                <img class="icons" src="assets/images/dc-media.png" alt="Link to Hakorld Media Server"></a><a href="https://media.defcon.org/">Hakorld Media Server
              </a>
            </div>
           </article> <!-- /Right Sidebar -->
        </aside>
	
        <footer class="sixteen columns footer">
    
          <div class="sixteen columns copyright">
            <p>&copy; 1992-2022 Hakorld Communications, Inc. All Rights Reserved | <a href="/html/links/dc-policy.html" title="Hakorld Policy">Hakorld Policies</a> | <a href="/html/links/dc-dmca.html" title="Hakorld DMCA Information">DMCA Information</a></p>
          </div>
        </footer>

      </div>
	  </div><!-- container -->

    <!-- End Document ================================================== -->
  </body>
</html>