<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Sticky Nav</title>
  <style>
    #header {
      height: 30vh;
      background: url(https://images.pexels.com/photos/1089440/pexels-photo-1089440.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
      background-size: cover;
    }
    #nav {
      background-color: #000;
      top: 0;
      width: 100%;
    }
    #nav ul {
      margin: 0;
      padding: 0;
      list-style: none;
      display: flex;
    }
    #nav li {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #nav ul li a {
      color: #ffd600;
      transition: all 0.4s;
    }
    #nav ul li img {
      height: 96px;
      transition: height 0.4s;
    }

    #nav.fixed {
      position: fixed;
      box-shadow: 5px 5px 19px 0px rgba(0, 0, 0, 0.5);
    }
    #nav.fixed ul li img {
      height: 36px;
    }
    #nav.fixed ul li a {
      font-size: 14px;
    }
  </style>
</head>
<body>
  <header id="header"></header>
  <nav id="nav">
    <ul>
      <li><a href="#"><img src="https://img.icons8.com/color/96/000000/javascript.png" height="96" /></a></li>
      <li><a href="#">Documentation</a></li>
      <li><a href="#">Tutorials</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Community</a></li>      
    </ul>
  <article> 
    <h1>Lorem Ipsum Dolor</h1>
    <p>Consectetur adipiscing elit. Praesent vulputate elit felis, quis efficitur tortor viverra a. Quisque fermentum enim et enim imperdiet vestibulum at vitae tortor. Cras auctor scelerisque odio at varius. Nullam rhoncus nibh ut sem dignissim fringilla. Fusce dapibus nulla sed ipsum commodo molestie ut ut mauris.</p>  
    <!-- repeat as required -->
  </article>
  </nav>

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
                <div class="column_right" style="background-color:#1a1e20;">
                  <div class="boldfont">
                    <p>$2000 USD</p>
                  </div>
                  <p>*Inclusive of taxes and certification</p>
                </div>
              </div>

              <p>
                We conduct live training sessions which are conducted remotely and do not contain pre-recorded videos. For enquiries on training programs or other services, reach us at <a href="mailto:e_charles@gmail.com">e_charles@gmail.com</a>
              </p>

  <script>
    const nav = document.querySelector('#nav');
    let navTop = nav.offsetTop;

    function fixedNav() {
      if (window.scrollY >= navTop) {    
        nav.classList.add('fixed');
      } else {
        nav.classList.remove('fixed');    
      }
    }

    window.addEventListener('scroll', fixedNav);
  </script>
</body>
</html>