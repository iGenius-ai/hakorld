<?php
  include("path.php");
	include(ROOT_PATH . "/app/database/db.php");
	// include(ROOT_PATH . "/app/controllers/users.php"); 
	include(ROOT_PATH . "/app/controllers/courses.php");
	// include(ROOT_PATH . "/app/PaystackAPI/initialize.php");
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">

    <!-- Twitter Do Not Track -->
    <meta name="twitter:dnt" content="on">

    <title>Hakorld - Course Detail</title>
    
    <!-- Bootstrap core CSS -->
    <link href="auth/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </head>

  <body id="page-top">
    
    <!-- Navigation Minimal -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed" id="mainNav">
      <div class="container animated fadeInDown">
        <!-- Nav Container -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/about/">&#8592; Back to courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/blogs/">Home</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End Navigation -->

      <!-- Show content -->
      <div class="content animated fadeInDown fast"><!-- Open container -->
        <div class="container">
          <div class="postbox">
            <div class="training-text">
              <h1><p><?php echo $course['course_title']; ?></p></h1>

              <div class="row flex-detail" id="sticky_navbar">
                <div class="column">
                  <a href="#what-to-expect">What To Expect</a>
                </div>
                <div class="column">
                  <a href="#prerequisites">Prerequisites</a>
                </div>
                <div class="column">
                  <a href="#system-requirements">System Requirements</a>
                </div>
                <div class="column">
                  <a href="#course-fees">Course Fees</a>
                </div>
              </div>

              <div class="row flex-detail track">
                <p><?php echo $course['course_date']; ?></p>
                <p><?php echo $course['course_format']; ?></p>
                <p><?php echo $course['experience']; ?></p>
              </div>

              <h3 class="stickyContent" id="what-to-expect">What To Expect</h3>

              <p>
                <?php echo $course['whattoexpect']; ?>
              </p>

              <h3 class="stickyContent" id="prerequisites">Pre-Requisites</h3>

              <p>
                The course is highly practical in nature and involves a lot of programming in C/C++, reverse engineering in windbg/x64dbg. Its important to have a good grasp of the below fundamentals before approaching the course.
              </p>
              <ul>
                <li>Basic Understanding of operating system architecture</li>
                <li>Basic Understanding of the Windows Active Directory environment</li>
                <li>Fundamental knowledge of programming with C/C++</li>
                <li>Familiarity with programming concepts </li>
                <li>Strong will to learn and creative mindset.</li>
              </ul>

              <h3 class="stickyContent" id="system-requirements">System Requirements</h3>

              <p>
                During the course, we will be working with different virtual machines which will involve cloning, creating, and snapshots and several other hands-on exercises. A properly configured system is extremely important to fully utilize the benefits of the training session. We strongly request you to have fully configured system which meets the below requirements for the course. All the requirements mentioned below are either freely available or open source.
              </p>

              <ul>
                <li>Windows 10 (Virtual Machine)
                  <ul>
                    <li>A laptop with atleast 16GB RAM to support 2 VMs running at the same time.</li>
                    <li>VMware/VirtualBox installed</li>
                    <li>Good Internet Connectivity</li>
                    <li>Visual Studio with C/C++/C# packages installed</li>
                    <li>Visual Code/Editor of your choice</li>
                    <li>x64dbg</li>
                    <li>CFF Explorer</li>
                    <li>Sysinternals Tookit</li>
                    <li>Process Hacker</li>
                  </ul>
                </li>
                <li>Kali Linux/Ubuntu 20.04 (Virtual Machine)
                  <ul>
                    <li>VS Code</li>
                    <li>Mingw-w64</li>
                    <li>Nasm</li>
                    <li>Wireshark</li>
                  </ul>
                </li>
              </ul>

              <p>
                <strong><em>NOTE: Make sure you have a snapshot of each virtual machine before you start the class, just in case you have to revert everything back to stock if your Virtual Machine crashes during the training.</em></strong>
              </p>

              <h3 class="stickyContent" id="course-fees">Course Fees</h3>

              <div class="row">
                <div class="column_right payment" style="background-color:#1a1e20;">
                  <div class="boldfont">
                    <p>Course Title: <?php echo $course['course_title']; ?></p>
                    <p style="font-size: 1.5rem;">Pricing: <strong>₦ <?php echo $course['course_price']; ?></strong></p>
                  </div>
                  <p>*Inclusive of taxes</p>

                  <form method="post" action="app/PaystackAPI/initialize.php">
                    <input type="hidden" name="amount" value="<?php echo $course['course_price'] * 100; ?>">
                    <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>"> 
                    <button type="submit" class="btn btn-sm pay">Pay with Paystack</button>
                  </form>
                </div>
              </div>

              <p>
                We conduct live training sessions which are conducted remotely and do not contain pre-recorded videos. For enquiries on training programs or other services, reach us at <a href="mailto:e_charles@gmail.com">e_charles@gmail.com</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End content -->
    
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; 2023 Hakorld</span>
          </div>
        </div>
      </div>
    </footer>

    <!-- Custom scripts for this theme -->
    <script src="assets/js/details.js"></script>
    <script src="assets/js/dark.js"></script>
    <script src="assets/js/activemenu.js"></script>

  </body>
</html>