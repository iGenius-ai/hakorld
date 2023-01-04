$(document).ready(function() {
  /*
    Toggle

    Basic usage:

    <div class="toggle">
      Text
      <div class="description hide">
        Hidden text
      </div>
    </div>
  */
  $(".toggle").click(function(){
    $(this).find(".description").fadeToggle("hide");
    $(this).toggleClass('alt');
  });
  // End toggle


  /*
    Upcoming Events

    Used in right column on root, latestintel, etc pages
  */
  var events = [
    //'<a href="https://www.blackhat.com/tr-22s/">Black Hat Trainings @ SecTor</a><br />October 1-4, 2022',
    //'<a href="https://www.blackhat.com/trj-22/">Black Hat Japan Trainings</a><br />November 12-15, 2022',
    //'<a target="_blank" rel="noopener noreferrer" href="https://blackhatmea.com/">Black Hat Middle East & Africa</a><br />November 15-17, 2022',
    //'<a href="https://www.blackhat.com/eu-22/">Black Hat Europe</a><br />December 5-8, 2022',
    //'<a target="_blank" rel="noopener noreferrer" href="https://vts.informaengage.com/dark-reading-cybersecurity-outlook-2023/?kcode=bhweb">Cybersecurity Outlook 2023</a><br />Full-day virtual event<br />December 13, 2022',
    '<a href="https://www.blackhat.com/tr-23/">Black Hat Spring Trainings</a><br />March 13-16, 2023',
    '<a href="https://www.blackhat.com/upcoming.html#asia">Black Hat Asia</a><br />May 9-12, 2023',
    '<a href="https://www.blackhat.com/upcoming.html#usa">Black Hat USA</a><br />August 5-10, 2023'
  ];

  var upcoming_events = document.getElementById("upcoming-events");

  if(upcoming_events){
    var ul = upcoming_events.getElementsByTagName("ul")[0];

    // Loop and append each array item inside an <li>:
    events.forEach(function(event){
      var li = document.createElement("li");
      ul.appendChild(li);
      li.innerHTML += event;
    });
  }
  // End Upcoming Events

  /* Wide (main column) */
  var sustaining_partners_container_wide = document.getElementById('sustaining-partners-wide');

  if(sustaining_partners_container_wide){
    sustaining_partners.forEach(function(partner){
      var span = document.createElement('span');
      sustaining_partners_container_wide.appendChild(span);
      span.innerHTML += partner;
    });
  }

  /* Tall (right column) */
  var sustaining_partners_container_tall = document.getElementById('sustaining-partners-tall');

  if(sustaining_partners_container_tall){
    sustaining_partners.forEach(function(partner){
      var div = document.createElement('div');
      div.setAttribute('class', 'home-sponsor-anchor');
      sustaining_partners_container_tall.appendChild(div);
      div.innerHTML += partner;
    });

    // The 'tall' variant has an action button at the bottom, we append it via:
    var sustaining_partners_more = document.createElement('div');
    sustaining_partners_more.innerHTML = '<a href="https://www.blackhat.com/html/sponsors_sustaining.html" class="button right">Sustaining Partners &raquo;</a>';
    sustaining_partners_container_tall.appendChild(sustaining_partners_more);
  }
  // End Sustaining Partners


  /*
    Top sitewide menu, all root pages, Latest Intel, Webcasts/Webinars, et al.  Plus event sites that include this file (/js/scripts.js)

    Data to be consumed, by function (below in this file).
  */
  var siteWideMenuLinks = [
    {
      "title": "<img src='https://www.blackhat.com/images/page-graphics/home.png' alt='Home' />", // The menu uses an image for 'Home'
      "url": "https://www.blackhat.com/",
      "target": "",
      "rel": "",
      "subMenu": []
    },

    {
      "title": "Events",
      "url": "https://www.blackhat.com/upcoming.html",
      "target": "",
      "rel": "",
      "subMenu": [
        {
          "title": "Black Hat Spring Trainings", 
          "url": "https://www.blackhat.com/tr-23/",
          "target": "",
          "rel": ""
        },
        {
          "title": "Upcoming Events", 
          "url": "https://www.blackhat.com/upcoming.html",
          "target": "",
          "rel": ""
        }
      ]
    },

    {
      "title": "Briefings",
      "url": "https://www.blackhat.com/briefings/",
      "target": "",
      "rel": "",
      "subMenu": [
        {
          "title": "Briefings", 
          "url": "https://www.blackhat.com/briefings/",
          "target": "",
          "rel": ""
        },
        {
          "title": "Call for Papers", 
          "url": "https://www.blackhat.com/call-for-papers.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Archives", 
          "url": "https://www.blackhat.com/html/archives.html",
          "target": "",
          "rel": ""
        }
      ]
    },

    {
      "title": "Trainings",
      "url": "https://www.blackhat.com/trainings/",
      "target": "",
      "rel": "",
      "subMenu": []
    },

    {
      "title": "Arsenal",
      "url": "https://www.blackhat.com/html/arsenal.html",
      "target": "",
      "rel": "",
      "subMenu": [
        {
          "title": "Arsenal", 
          "url": "https://www.blackhat.com/html/arsenal.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Resources", 
          "url": "https://www.blackhat.com/html/arsenal-resources.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Call for Tools", 
          "url": "https://www.blackhat.com/html/arsenal-call-for-tools.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Review Board", 
          "url": "https://www.blackhat.com/html/arsenal.html#review-board",
          "target": "",
          "rel": ""
        }
      ]
    },

    {
      "title": "Summits",
      "url": "https://www.blackhat.com/html/summits.html",
      "target": "",
      "rel": "",
      "subMenu": []
    },

    {
      "title": "Webinars",
      "url": "https://www.blackhat.com/html/webcast/webcast-home.html",
      "target": "",
      "rel": "",
      "subMenu": [
        {
          "title": "Webinars", 
          "url": "https://www.blackhat.com/html/webcast/webcast-home.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Executive Interviews", 
          "url": "https://www.blackhat.com/html/executive-interviews/",
          "target": "",
          "rel": ""
        }
      ]
    },

    {
      "title": "Sponsorships",
      "url": "https://www.blackhat.com/html/sponsors.html",
      "target": "",
      "rel": "",
      "subMenu": []
    },

    {
      "title": "About",
      "url": "https://www.blackhat.com/about.html",
      "target": "",
      "rel": "",
      "subMenu": [
        {
          "title": "About Us", 
          "url": "https://www.blackhat.com/about.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Press", 
          "url": "https://www.blackhat.com/html/press.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Review Board", 
          "url": "https://www.blackhat.com/review-board.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Training Review Board", 
          "url": "https://www.blackhat.com/training-review-board.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Call for Papers", 
          "url": "https://www.blackhat.com/call-for-papers.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Community", 
          "url": "https://www.blackhat.com/community.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Code of Conduct", 
          "url": "https://www.blackhat.com/code-of-conduct.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Contact Us", 
          "url": "https://www.blackhat.com/html/contact.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Sustainability", 
          "url": "https://www.blackhat.com/html/sustainability.html",
          "target": "",
          "rel": ""
        },
        {
          "title": "Privacy", 
          "url": "https://informa.com/privacy-policy/",
          "target": "_blank",
          "rel": "noopener noreferrer"
        }
      ]
    }
  ]
  // Execute the menu - non-Bootstrap (function is below in this same file)
  siteWideMenu(siteWideMenuLinks);
  // Execute the menu - Bootstrap (function is below in this same file)
  siteWideMenuBootstrap(siteWideMenuLinks);
  // End: top-nav

}); // End $(document).ready


/*
  DATA

  Review Board & Training Review Board data, for right column on root, latestintel, etc pages.

  These arrays are used by function reviewBoardFaces(), below in this file.
*/
var review_board = [
  {
    "view_more_title": "View All Members",
    "url": "https://www.blackhat.com/review-board.html",
    "target": "",
    "rel": "",
    "members": [
      /*
      {
        "name": "Dino Dai Zovi",
        "image": "https://www.blackhat.com/images/portraits/dino-dai-zovi.png",
        "url": "https://www.blackhat.com/review-board.html#Dai-Zovi"
      },
      {
        "name": "Chris Wysopal",
        "image": "https://www.blackhat.com/images/portraits/chris-wysopal.png",
        "url": "https://www.blackhat.com/review-board.html#Wysopal"
      },
      {
        "name": "Robert Hansen",
        "image": "https://www.blackhat.com/images/portraits/robert-hansen.png",
        "url": "https://www.blackhat.com/review-board.html#Hansen"
      },
      {
        "name": "Jeff Horne",
        "image": "https://www.blackhat.com/images/review-board/Jeff-Horne.jpg",
        "url": "https://www.blackhat.com/review-board.html#Horne"
      },
      */
      {
        "name": "Sheila A. Berta",
        "image": "https://www.blackhat.com/images/portraits/sheila-ayelen-berta.png",
        "url": "https://www.blackhat.com/review-board.html#Berta"
      },
      {
        "name": "Chris Eng",
        "image": "https://www.blackhat.com/images/portraits/chris-eng.png",
        "url": "https://www.blackhat.com/review-board.html#Eng"
      },
      {
        "name": "Monnappa K A",
        "image": "https://www.blackhat.com/images/portraits/monnappa-k-a.png",
        "url": "https://www.blackhat.com/review-board.html#KA"
      },
      {
        "name": "Asuka Nakajima",
        "image": "https://www.blackhat.com/images/portraits/asuka-nakajima.png",
        "url": "https://www.blackhat.com/review-board.html#Nakajima"
      },
      {
        "name": "Kymberlee Price",
        "image": "https://www.blackhat.com/images/portraits/kymberlee-price.png",
        "url": "https://www.blackhat.com/review-board.html#Price"
      },
      {
        "name": "Stefano Zanero",
        "image": "https://www.blackhat.com/images/portraits/stefano-zanero.png",
        "url": "https://www.blackhat.com/review-board.html#Zanero"
      }
    ]
  }
];
var training_review_board = [
  {
    "view_more_title": "View All Members",
    "url": "https://www.blackhat.com/training-review-board.html",
    "target": "",
    "rel": "",
    "members": [
      {
        "name": "Russ Rogers",
        "image": "https://www.blackhat.com/images/portraits/russ-rogers.png",
        "url": "https://www.blackhat.com/training-review-board.html#Rogers"
      },
      {
        "name": "Ping Look",
        "image": "https://www.blackhat.com/images/portraits/ping-look.png",
        "url": "https://www.blackhat.com/training-review-board.html#Look"
      },
      {
        "name": "Jonathan Squire",
        "image": "https://www.blackhat.com/images/portraits/jon-squire.png",
        "url": "https://www.blackhat.com/training-review-board.html#Squire"
      },
      {
        "name": "Bart Stump",
        "image": "https://www.blackhat.com/images/portraits/bart-stump.png",
        "url": "https://www.blackhat.com/training-review-board.html#Stump"
      },
      {
        "name": "Neil Wyler",
        "image": "https://www.blackhat.com/images/portraits/neil-wyler.png",
        "url": "https://www.blackhat.com/training-review-board.html#Wyler"
      },
      {
        "name": "Maria Markstedter",
        "image": "https://www.blackhat.com/images/portraits/maria-markstedter.png",
        "url": "https://www.blackhat.com/training-review-board.html#Markstedter"
      }
    ]
  }
];


// Functions are below ***************************************************************************


/*
  FUNCTION

  Top site-wide menu, non-Bootstrap.

  This consumes data from JSON array, nested in document.ready above.
*/
function siteWideMenu(siteWideMenuLinks) {
  if(siteWideMenuLinks) {

    // Define the element we'll insert the menu into when complete:
    var site_wide_menu = document.getElementById('cssmenu');

    if(site_wide_menu) {
      //stuff here

      var siteWideMenuHTML = '<ul>';

      // A counter for the loop
      var i = 0;

      // Begin looping through top-level event menu nav items
      for (i in siteWideMenuLinks) {
        // Begin the main top-level nav item, including URL and class
        siteWideMenuHTML += "<li";

        // If the current item has a populated subMenu array, the <li> gets a class added
        if(Array.isArray(siteWideMenuLinks[i].subMenu) && siteWideMenuLinks[i].subMenu.length) {
          siteWideMenuHTML += " class='has-sub'";
        }

        siteWideMenuHTML += "><a href='" + siteWideMenuLinks[i].url + "'";

        // If the current item has a populated subMenu array, the <a> gets a class added
        if(Array.isArray(siteWideMenuLinks[i].subMenu) && siteWideMenuLinks[i].subMenu.length) {
          siteWideMenuHTML += " class='has-sub-dd'";
        }

        // If a target is defined
        if(siteWideMenuLinks[i].target){
          siteWideMenuHTML += " target='" + siteWideMenuLinks[i].target + "'";
        }

        // If a rel is defined
        if(siteWideMenuLinks[i].rel){
          siteWideMenuHTML += " rel='" + siteWideMenuLinks[i].rel + "'";
        }

        // The title that displays to the user
        siteWideMenuHTML += "><span>" + siteWideMenuLinks[i].title + "</span></a>";

        // If the current item has a populated subMenu array
        if(Array.isArray(siteWideMenuLinks[i].subMenu) && siteWideMenuLinks[i].subMenu.length) {
          // Open an unordered list nested in the parent
          siteWideMenuHTML += "<ul>";

          // A counter for the subMenu items:
          var j = 0;

          // Loop through all subMenu items and append each, starting with the opening list item tag and opening the anchor tag
          for (j in siteWideMenuLinks[i].subMenu) {
            siteWideMenuHTML += "<li><a href='" + siteWideMenuLinks[i].subMenu[j].url + "'"

            // If a target is defined
            if(siteWideMenuLinks[i].subMenu[j].target){
              siteWideMenuHTML += " target='" + siteWideMenuLinks[i].subMenu[j].target + "'";
            }
            // If a rel is defined
            if(siteWideMenuLinks[i].subMenu[j].rel){
              siteWideMenuHTML += " rel='" + siteWideMenuLinks[i].subMenu[j].rel + "'";
            }
            // Append the title, close the link and list item
            siteWideMenuHTML += ">" + siteWideMenuLinks[i].subMenu[j].title + "</a></li>";
          }
          // Close the nested unordered list that encloses the subMenu
          siteWideMenuHTML += "</ul>";
        }
        // Close the list item of the current top-level menu item, before ending the loop
        siteWideMenuHTML += "</li>";
      }
      siteWideMenuHTML += '</ul>';

      // Insert the mainNav into its intended container
      site_wide_menu.innerHTML = siteWideMenuHTML;
    }
  }
}


/*
  FUNCTION

  Top site-wide menu, Bootstrap version.

  This consumes data from JSON array, nested in document.ready above.
*/
function siteWideMenuBootstrap(siteWideMenuLinks) {
  if(siteWideMenuLinks) {
    // Define the element we'll insert the menu into when complete:
    var site_wide_menu = document.getElementById('top-bar-container');

    if(site_wide_menu) {
      var siteWideMenuHTML = "<nav class='navbar navbar-expand-lg navbar-dark static-top my-0 py-0'>";
      siteWideMenuHTML += "<div class='container'>";
      siteWideMenuHTML += "<a class='navbar-brand' href='#'>Site Menu</a>";
      siteWideMenuHTML += "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#top-bar' aria-controls='top-bar' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>";
      siteWideMenuHTML += "<div class='collapse navbar-collapse' id='top-bar'>";

      // Start the unordered list
      siteWideMenuHTML += "<ul class='navbar-nav mr-auto'>";

      // A counter for the loop
      var i = 0;
      // Begin looping through top-level event menu nav items
      for (i in siteWideMenuLinks) {
        // Begin the main top-level nav item, including URL and class
        siteWideMenuHTML += "<li class='nav-item";

        // If the current item has a populated subMenu array, the <li> gets a class added
        if(Array.isArray(siteWideMenuLinks[i].subMenu) && siteWideMenuLinks[i].subMenu.length) {
          siteWideMenuHTML += " dropdown";
        }
        siteWideMenuHTML += "'>"; // close the <li> 'class=""' quotes, and close the opening <li> tag

        // If the current item has a populated subMenu array
        if(Array.isArray(siteWideMenuLinks[i].subMenu) && siteWideMenuLinks[i].subMenu.length) {
          siteWideMenuHTML += "<a class='nav-link dropdown-toggle' href='#' id='menu-" + i + "' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>" + siteWideMenuLinks[i].title + "</a>";

          // Open an div to enclose the subMenu links
          siteWideMenuHTML += "<div class='dropdown-menu' aria-labelledby='menu-" + i + "'>";

          // A counter for the subMenu items:
          var j = 0;
          // Loop through all subMenu items and append each, starting with the opening list item tag and opening the anchor tag
          for (j in siteWideMenuLinks[i].subMenu) {
            siteWideMenuHTML += "<a class='dropdown-item' href='" + siteWideMenuLinks[i].subMenu[j].url + "'"
            // If a target is defined
            if(siteWideMenuLinks[i].subMenu[j].target){
              siteWideMenuHTML += " target='" + siteWideMenuLinks[i].subMenu[j].target + "'";
            }
            // If a rel is defined
            if(siteWideMenuLinks[i].subMenu[j].rel){
              siteWideMenuHTML += " rel='" + siteWideMenuLinks[i].subMenu[j].rel + "'";
            }
            // Append the title, close the link and list item
            siteWideMenuHTML += ">" + siteWideMenuLinks[i].subMenu[j].title + "</a>";
          }
          // Close the div that encloses the subMenu
          siteWideMenuHTML += "</div>";
        } else {
          // If there is no subMenu array for this item
          siteWideMenuHTML += '<a href="' + siteWideMenuLinks[i].url + '" class="nav-link"';
          // If a target is defined
          if(siteWideMenuLinks[i].target){
            siteWideMenuHTML += " target='" + siteWideMenuLinks[i].target + "'";
          }
          // If a rel is defined
          if(siteWideMenuLinks[i].rel){
            siteWideMenuHTML += " rel='" + siteWideMenuLinks[i].rel + "'";
          }
          // The title that displays to the user
          siteWideMenuHTML += ">" + siteWideMenuLinks[i].title + "</a>";
        }
        // Close the list item of the current top-level menu item, before ending the loop
        siteWideMenuHTML += "</li>";
      }
      siteWideMenuHTML += '</ul>';

      siteWideMenuHTML += "</div>";
      siteWideMenuHTML += "</div>";
      siteWideMenuHTML += "</nav>";
      siteWideMenuHTML += "<nav id='top-bar-social' class='d-none d-xl-block'>";
      siteWideMenuHTML += "<div class='container'>";
      siteWideMenuHTML += "<div class='icons'>";
      siteWideMenuHTML += "<a href='https://www.blackhat.com/mailing-list.html' class='mailing-list' target='_blank' rel='noopener noreferrer' title='Mailing List'></a>";
      siteWideMenuHTML += "<a href='https://www.facebook.com/Black-Hat-Events-107691635153/' class='facebook' target='_blank' rel='noopener noreferrer' title='Facebook'></a>";
      siteWideMenuHTML += "<a href='https://twitter.com/BlackHatEvents' class='twitter' target='_blank' rel='noopener noreferrer' title='Twitter'></a>";
      siteWideMenuHTML += "<a href='https://www.linkedin.com/groups/37658/' class='linkedin' target='_blank' rel='noopener noreferrer' title='LinkedIn'></a>";
      siteWideMenuHTML += "<a href='https://www.youtube.com/user/BlackHatOfficialYT' class='youtube' target='_blank' rel='noopener noreferrer' title='YouTube'></a>";
      siteWideMenuHTML += "<a href='https://www.flickr.com/photos/blackhatevents/albums/' class='flickr' target='_blank' rel='noopener noreferrer' title='Flickr'></a>";
      siteWideMenuHTML += "</div>";
      siteWideMenuHTML += "</div>";
      siteWideMenuHTML += "</nav>";
      
      // Insert the mainNav into its intended container
      site_wide_menu.innerHTML = siteWideMenuHTML;
    }
  }
}
// End sitewide menu (Bootstrap)


/*
  FUNCTION

  Homepage-style slider. Can be used on pages other than homepage.  See root homepage (index.html) for JSON example.

  Example implementation:

    <div id="homepage-slider">
      <script>
        $(document).ready(function() {
          BlackHatSlider(slideShow, "homepage-slider"); // homepageSlider() is a JavaScript function in /js/scripts.js
        });
      </script>
    </div>
*/
function BlackHatSlider(data, bind) {
  if(data && bind) {
    var container = document.getElementById(bind);

    if(container) {
      container.setAttribute('class', 'carousel slide mb-4');
      container.setAttribute('data-ride', 'carousel');

      var i = 0; // declare counter

      // Begin the navigational dots at bottomn of carousel
      var output = '<ol class="carousel-indicators">';

      for(i in data) {
        output += '<li data-target="#' + bind + '" data-slide-to="' + i + '"'

        if(i == 0) {
          output += ' class="active"'; // first item only
        }

        output += '></li>';
      }

      output += '</ol>';

      // Begin slides
      output += '<div class="carousel-inner" role="listbox">';

      var i = 0; // reset counter

      for (i in data) {
        output += '<a href="' + data[i].url + '" class="carousel-item';

        if(i == 0) {
          output += ' active'; // first item only
        }

        output += '" style="background-image: url(\'' + data[i].background + '\')"';

        // If a target is defined
        if(data[i].target){
          output += " target='" + data[i].target + "'";
        }

        // If a rel is defined
        if(data[i].rel){
          output += " rel='" + data[i].rel + "'";
        }

        output += '>';
        output += '<div class="carousel-caption">';
        output += '<h3>' + data[i].title + '</h3>';
        output += '<p>' + data[i].description + ' <span class="more">' + data[i].more + '</span></p>';
        output += '</div>';
        output += '</a>';
      }

      output += '</div>';

      // left / right (previous / next) arrows
      output += '<a class="carousel-control-prev" href="#' + bind + '" role="button" data-slide="prev">';
      output += '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
      output += '<span class="sr-only">Previous</span>';
      output += '</a>';
      output += '<a class="carousel-control-next" href="#' + bind + '" role="button" data-slide="next">';
      output += '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
      output += '<span class="sr-only">Next</span>';
      output += '</a>';

      // Bind to intended container
      container.innerHTML = output;
    }
  }
}


/*
  FUNCTION

  Review Board Faces

  DisplayS on non-event pages with right sidebar. Outputs Bootstrap markup.

  Consumes an array (above in this file), and binds to a container in the right sidebar on non-event pages.

  Example (see 'bootstrap-sidebar-right' file):

  <article id="sidebar-review-board">
    <script>
      reviewBoardFaces(review_board, "sidebar-review-board"); // controlled in /js/scripts.js
    </script>
  </article>
*/
function reviewBoardFaces(data, bind, layout) {
  if(data && bind) {
    var container = document.getElementById(bind);

    if(container) {
      var output = '<div class="row">';

      var i = 0;

      if(Array.isArray(data[i].members) && data[i].members.length) {
        var j = 0;

        for (j in data[i].members) {
          if(layout && layout == 'wide') {
            output += '<div class="col-4 col-md-2 mb-3">'; // wide display, like on homepage
          } else {
            output += '<div class="col-4 col-md-2 col-lg-6 col-xl-4 mb-3">'; // tall display, default - for right columns of non-event site pages
          }
          output += '<div class="thumb">';
          output += '<a href="' + data[i].members[j].url + '" title="' + data[i].members[j].name + '"><img src="' + data[i].members[j].image + '" alt="" class="grayscale"></a>';
          output += '</div>';
          output += '</div>';
        }
      }

      output += '</div>';

      if(data[i].view_more_title && data[i].url) {
        output += '<hr class="mt-0 mb-3 pt-0 pb-0">';

        output += '<p class="text-right mb-0 pb-0"><a class="view-more mb-3" href="' + data[i].url + '" target="' + data[i].target + '" rel="' + data[i].rel + '">' + data[i].view_more_title + '</a></p>';
      }

      // Bind to intended container
      container.innerHTML = output;
    }
  }
}
// End Review Board


/*
  FUNCTION

  Event Menu function to display JSON array of main menu on event sites.  Non-Bootstrap version.

  The JSON array is held in /eventsite-yy/js/scripts.js (ex: /asia-20/js/scripts.js)

  Use:
    window.onload = function() {
      eventMenu(mainEventNav);
    }
*/
function eventMenu(mainEventNav) {
  if(mainEventNav){
    // Define the element we'll insert the menu into when complete:
    var event_main_nav = document.getElementById('event-main-nav');

    if(event_main_nav){
      // Open the containers
      var mainNav = '<div id="css-main-nav-menu">';
      mainNav += '<ul class="css-main-nav-menu-container">';

      // A counter for the loop
      var i = 0;

      // Begin looping through top-level event menu nav items
      for (i in mainEventNav) {
        // Begin the main top-level nav item, including URL and class
        mainNav += "<li class='main-nav-parent-container has-sub'><a href='" + mainEventNav[i].url + "' class='main-nav-parent-link'"
        // If a target is defined
        if(mainEventNav[i].target){
          mainNav += " target='" + mainEventNav[i].target + "'";
        }
        // If a rel is defined
        if(mainEventNav[i].rel){
          mainNav += " rel='" + mainEventNav[i].rel + "'";
        }
        // The title that displays to the user
        mainNav += ">" + mainEventNav[i].title + "</a>";

        // If the current item has a populated subMenu array
        if(Array.isArray(mainEventNav[i].subMenu)) {
          // Open an unordered list nested in the parent
          mainNav += "<ul>";

          // A counter for the subMenu items:
          var j = 0;

          // Loop through all subMenu items and append each, starting with the opening list item tag and opening the anchor tag
          for (j in mainEventNav[i].subMenu) {
            mainNav += "<li><a href='" + mainEventNav[i].subMenu[j].url + "'"
            // If a target is defined
            if(mainEventNav[i].subMenu[j].target){
              mainNav += " target='" + mainEventNav[i].subMenu[j].target + "'";
            }
            // If a rel is defined
            if(mainEventNav[i].subMenu[j].rel){
              mainNav += " rel='" + mainEventNav[i].subMenu[j].rel + "'";
            }
            // Append the title, close the link and list item
            mainNav += ">" + mainEventNav[i].subMenu[j].title + "</a></li>";
          }
          // Close the nested unordered list that encloses the subMenu
          mainNav += "</ul>";
        }
        // Close the list item of the current top-level menu item, before ending the loop
        mainNav += "</li>";
      }
      // Append the closing tags for the master unordered list and div containers
      mainNav += '</ul>';
      mainNav += '</div>';
      // Insert the mainNav into its intended container
      event_main_nav.innerHTML = mainNav;
    }
  }
}
// End Event Menu (non-Bootstrap)


/*
  FUNCTION

  Event Menu function to display JSON array of main menu on event sites.  Bootstrap version.

  The JSON array is held in /eventsite-yy/js/scripts.js (ex: /asia-20/js/scripts.js)

  Use:
    window.onload = function() {
      eventMenuBootstrap(mainEventNav);
    }
*/
function eventMenuBootstrap(mainEventNav) {
  if(mainEventNav){
    // Define the element we'll insert the menu into when complete:
    var event_main_nav = document.getElementById('main-menu-wrapper');

    if(event_main_nav){
      var mainNav = "<div class='container'>";
      mainNav += "<a class='navbar-brand' href='#'>Event Menu</a>";
      mainNav += "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#main-menu' aria-controls='main-menu' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>";
      mainNav += "<div class='collapse navbar-collapse' id='main-menu'>";

      // Open the containers
      mainNav += '<ul class="navbar-nav mr-auto">';

      // A counter for the loop
      var i = 0;

      // Begin looping through top-level event menu nav items
      for (i in mainEventNav) {
        // Begin the main top-level nav item.
        mainNav += "<li class='nav-item";
        if(Array.isArray(mainEventNav[i].subMenu) && mainEventNav[i].subMenu.length) {
          mainNav += " dropdown"; // Include 'dropdown' class, if there's a populated subMenu for this item.
        }
        mainNav += "'>"; // End the opening <li>

        if(Array.isArray(mainEventNav[i].subMenu) && mainEventNav[i].subMenu.length) {
          // Top-level anchor, if there is a subMenu for this item.

          // Small screen version of top-level anchor: (toggles sub-menu open)
          mainNav += "<a class='nav-link dropdown-toggle d-lg-none' href='#' id='submenu-" + i + "' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>" + mainEventNav[i].title + "</a>";

          // Large screen version of top-level anchor: (top-link is clickable, relies on CSS to open sub-menu on hover)
          mainNav += "<a class='nav-link dropdown-toggle d-none d-lg-block' href='" + mainEventNav[i].url + "' id='submenu-" + i + "' data-toggle='dropdown disabled' aria-haspopup='true' aria-expanded='false'>" + mainEventNav[i].title + "</a>";

          // Open a div to contain the subMenu links
          mainNav += "<div class='dropdown-menu' aria-labelledby='submenu-" + i + "'>";

          // A counter for the subMenu items:
          var j = 0;

          // Loop through all subMenu items and append each, starting with the opening list item tag and opening the anchor tag
          for (j in mainEventNav[i].subMenu) {
            mainNav += "<a class='dropdown-item' href='" + mainEventNav[i].subMenu[j].url + "'"
            // If a target is defined
            if(mainEventNav[i].subMenu[j].target){
              mainNav += " target='" + mainEventNav[i].subMenu[j].target + "'";
            }
            // If a rel is defined
            if(mainEventNav[i].subMenu[j].rel){
              mainNav += " rel='" + mainEventNav[i].subMenu[j].rel + "'";
            }
            // Append the title, close the link and list item
            mainNav += ">" + mainEventNav[i].subMenu[j].title + "</a>";
          }
          // Close the nested div that encloses the subMenu links
          mainNav += "</div>";
        } else {
          // Top-level anchor, if there is no subMenu for this item.
          mainNav += "<a href='" + mainEventNav[i].url + "' class='nav-link'"
          // If a target is defined
          if(mainEventNav[i].target){
            mainNav += " target='" + mainEventNav[i].target + "'";
          }
          // If a rel is defined
          if(mainEventNav[i].rel){
            mainNav += " rel='" + mainEventNav[i].rel + "'";
          }
          // The title that displays to the user
          mainNav += ">" + mainEventNav[i].title + "</a>";
        }
        // Close the list item of the current top-level menu item, before ending the loop
        mainNav += "</li>";
      }
      // Append the closing tags for the master unordered list and div containers
      mainNav += '</ul>';

      mainNav += "</div>";
      mainNav += "</div>";

      // Insert the mainNav into its intended container
      event_main_nav.innerHTML = mainNav;
    }
  }
}
// End Event Menu (Bootstrap)


/*
    FUNCTION

    EU Cookie Law popup
*/
$(document).ready(function() {
  // Create a div with class 'eupopup', and append it to the footer.
  // We insert the cookie popup into this div.
  var euCookieContainer = document.createElement('div');
  euCookieContainer.setAttribute('class','eupopup');
});

/**
 *
 * JQUERY EU COOKIE LAW POPUPS
 * version 1.1.1
 *
 * Code on Github:
 * https://github.com/wimagguc/jquery-eu-cookie-law-popup
 *
 * To see a live demo, go to:
 * http://www.wimagguc.com/2018/05/gdpr-compliance-with-the-jquery-eu-cookie-law-plugin/
 *
 * by Richard Dancsi
 * http://www.wimagguc.com/
 *
 */

/* Examples:
   CSS: https://cdn.rawgit.com/wimagguc/jquery-eu-cookie-law-popup/master/css/jquery-eu-cookie-law-popup.css
   
   JS: https://cdn.rawgit.com/wimagguc/jquery-eu-cookie-law-popup/master/js/jquery-eu-cookie-law-popup.js
*/
(function($) {

// for ie9 doesn't support debug console >>>
if (!window.console) window.console = {};
if (!window.console.log) window.console.log = function () { };
// ^^^

$.fn.euCookieLawPopup = (function() {

  var _self = this;

  ///////////////////////////////////////////////////////////////////////////////////////////////
  // PARAMETERS (MODIFY THIS PART) //////////////////////////////////////////////////////////////
  _self.params = {
    //cookiePolicyUrl : 'https://tech.informa.com/cookie-policy',
    popupPosition : 'bottom',
    colorStyle : 'default',
    compactStyle : false,
    //popupTitle : 'This website is using cookies',
    popupText : 'This site uses cookies to provide you with the best user experience possible. By continuing to use this site, you accept <a href="https://tech.informa.com/cookie-policy" target="_blank" rel="noopener noreferrer">our use of cookies</a>.',
    buttonContinueTitle : 'I Agree',
    //buttonLearnmoreTitle : 'Learn&nbsp;more',
    buttonLearnmoreOpenInNewWindow : true,
    agreementExpiresInDays : 182,
    autoAcceptCookiePolicy : false,
    htmlMarkup : null
  };

  ///////////////////////////////////////////////////////////////////////////////////////////////
  // VARIABLES USED BY THE FUNCTION (DON'T MODIFY THIS PART) ////////////////////////////////////
  _self.vars = {
    INITIALISED : false,
    HTML_MARKUP : null,
    COOKIE_NAME : 'eucookielaw', // Changed from original value: 'EU_COOKIE_LAW_CONSENT'
    COOKIE_VALUE : 'set' // Added, called 3x below
  };

  ///////////////////////////////////////////////////////////////////////////////////////////////
  // PRIVATE FUNCTIONS FOR MANIPULATING DATA ////////////////////////////////////////////////////

  // Overwrite default parameters if any of those is present
  var parseParameters = function(object, markup, settings) {
    if (object) {
      var className = $(object).attr('class') ? $(object).attr('class') : '';
      if (className.indexOf('eupopup-top') > -1) {
        _self.params.popupPosition = 'top';
      }
      else if (className.indexOf('eupopup-fixedtop') > -1) {
        _self.params.popupPosition = 'fixedtop';
      }
      else if (className.indexOf('eupopup-bottomright') > -1) {
        _self.params.popupPosition = 'bottomright';
      }
      else if (className.indexOf('eupopup-bottomleft') > -1) {
        _self.params.popupPosition = 'bottomleft';
      }
      else if (className.indexOf('eupopup-bottom') > -1) {
        _self.params.popupPosition = 'bottom';
      }
      else if (className.indexOf('eupopup-block') > -1) {
        _self.params.popupPosition = 'block';
      }
      if (className.indexOf('eupopup-color-default') > -1) {
        _self.params.colorStyle = 'default';
      }
      else if (className.indexOf('eupopup-color-inverse') > -1) {
        _self.params.colorStyle = 'inverse';
      }
      if (className.indexOf('eupopup-style-compact') > -1) {
        _self.params.compactStyle = true;
      }
    }

    if (markup) {
      _self.params.htmlMarkup = markup;
    }

    if (settings) {
      if (typeof settings.cookiePolicyUrl !== 'undefined') {
        _self.params.cookiePolicyUrl = settings.cookiePolicyUrl;
      }
      if (typeof settings.popupPosition !== 'undefined') {
        _self.params.popupPosition = settings.popupPosition;
      }
      if (typeof settings.colorStyle !== 'undefined') {
        _self.params.colorStyle = settings.colorStyle;
      }
      if (typeof settings.popupTitle !== 'undefined') {
        _self.params.popupTitle = settings.popupTitle;
      }
      if (typeof settings.popupText !== 'undefined') {
        _self.params.popupText = settings.popupText;
      }
      if (typeof settings.buttonContinueTitle !== 'undefined') {
        _self.params.buttonContinueTitle = settings.buttonContinueTitle;
      }
      if (typeof settings.buttonLearnmoreTitle !== 'undefined') {
        _self.params.buttonLearnmoreTitle = settings.buttonLearnmoreTitle;
      }
      if (typeof settings.buttonLearnmoreOpenInNewWindow !== 'undefined') {
        _self.params.buttonLearnmoreOpenInNewWindow = settings.buttonLearnmoreOpenInNewWindow;
      }
      if (typeof settings.agreementExpiresInDays !== 'undefined') {
        _self.params.agreementExpiresInDays = settings.agreementExpiresInDays;
      }
      if (typeof settings.autoAcceptCookiePolicy !== 'undefined') {
        _self.params.autoAcceptCookiePolicy = settings.autoAcceptCookiePolicy;
      }
      if (typeof settings.htmlMarkup !== 'undefined') {
        _self.params.htmlMarkup = settings.htmlMarkup;
      }
    }
  };

  var createHtmlMarkup = function() {
    if (_self.params.htmlMarkup) {
      return _self.params.htmlMarkup;
    }

    /*
    var html =
      '<div class="eupopup-container' +
          ' eupopup-container-' + _self.params.popupPosition +
          (_self.params.compactStyle ? ' eupopup-style-compact' : '') +
        ' eupopup-color-' + _self.params.colorStyle + '">' +
        '<div class="eupopup-head">' + _self.params.popupTitle + '</div>' +
        '<div class="eupopup-body">' + _self.params.popupText + '</div>' +
        '<div class="eupopup-buttons">' +
          '<a href="#" class="eupopup-button eupopup-button_1">' + _self.params.buttonContinueTitle + '</a>' +
          '<a href="' + _self.params.cookiePolicyUrl + '"' +
          (_self.params.buttonLearnmoreOpenInNewWindow ? ' target="_blank" ' : '') +
          ' rel="noopener noreferrer" class="eupopup-button eupopup-button_2">' + _self.params.buttonLearnmoreTitle + '</a>' +
          '<div class="clearfix"></div>' +
        '</div>' +
        '<a href="#" class="eupopup-closebutton">x</a>' +
      '</div>';
      */

    // Our html var is entirely custom:
    var html  = '<div id="eucookielawcontainer">';
        html += '<div class="eupopup-container eupopup-bottom eupopup-markup">';
        html += '<div class="eucookiebanner">';
        html += '<div class="padding">';
        html += '<div class="cookieblock eupopup-body">';
        html += '<p>' + _self.params.popupText + '</p>';
        html += '</div>';
        html += '<div class="cookieblock">';
        html += '<p><a class="eupopup-button eupopup-button_1 button btn btn-primary" href="#"><span>I Agree</span></a></p>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';

    return html;
  };

  // Storing the consent in a cookie
  var setUserAcceptsCookies = function(consent) {
    var d = new Date();
    var expiresInDays = _self.params.agreementExpiresInDays * 24 * 60 * 60 * 1000;
    d.setTime( d.getTime() + expiresInDays );
    var expires = "expires=" + d.toGMTString();
    document.cookie = _self.vars.COOKIE_NAME + '=' + consent + "; " + expires + ";path=/";

    $(document).trigger("user_cookie_consent_changed", {'consent' : consent});
  };

  // Let's see if we have a consent cookie already
  var userAlreadyAcceptedCookies = function() {
    var userAcceptedCookies = false;
    var cookies = document.cookie.split(";");
    for (var i = 0; i < cookies.length; i++) {
      var c = cookies[i].trim();
      if (c.indexOf(_self.vars.COOKIE_NAME) !== -1) {
        userAcceptedCookies = c.substring(_self.vars.COOKIE_NAME.length + 1, c.length);
      }
    }
    return userAcceptedCookies;
  };

  var hideContainer = function() {
    // $('.eupopup-container').slideUp(200);
    $('.eupopup-container').animate({
      opacity: 0,
      height: 0
    }, 200, function() {
      $('.eupopup-container').hide(0);
    });
  };

  ///////////////////////////////////////////////////////////////////////////////////////////////
  // PUBLIC FUNCTIONS  //////////////////////////////////////////////////////////////////////////
  var publicfunc = {
    // INITIALIZE EU COOKIE LAW POPUP /////////////////////////////////////////////////////////
    init : function(settings) {
      parseParameters(
        $(".eupopup").first(),
        $(".eupopup-markup").html(),
        settings);

      // No need to display this if user already accepted the policy
      if (userAlreadyAcceptedCookies()) {
        $(document).trigger("user_cookie_already_accepted", {'consent': true});
        return;
      }

      // We should initialise only once
      if (_self.vars.INITIALISED) {
        return;
      }
      _self.vars.INITIALISED = true;

      // Markup and event listeners >>>
      _self.vars.HTML_MARKUP = createHtmlMarkup();

      if ($('.eupopup-block').length > 0) {
        $('.eupopup-block').append(_self.vars.HTML_MARKUP);
      } else {
        $('body').append(_self.vars.HTML_MARKUP);
      }
      
      $('.eupopup-button_1').click(function() {
        setUserAcceptsCookies(_self.vars.COOKIE_VALUE); // original value passed was 'true' sans quotes
        hideContainer();
        return false;
      });
      $('.eupopup-closebutton').click(function() {
        setUserAcceptsCookies(_self.vars.COOKIE_VALUE); // original value passed was 'true' sans quotes
        hideContainer();
        return false;
      });
      // ^^^ Markup and event listeners

      // Ready to start!
      $('.eupopup-container').show();

      // In case it's alright to just display the message once
      if (_self.params.autoAcceptCookiePolicy) {
        setUserAcceptsCookies(_self.vars.COOKIE_VALUE); // original value passed was 'true' sans quotes
      }
    }
  };
  return publicfunc;
});


$(document).ready( function() {
  if ($(".eupopup").length > 0) {
    $(document).euCookieLawPopup().init({
      /*'info' : 'YOU_CAN_ADD_MORE_SETTINGS_HERE',
      'popupTitle' : 'This website is using cookies. ',
      'popupText' : 'We use them to give you the best experience. If you continue using our website, we\'ll assume that you are happy to receive all cookies on this website.'*/
    });
  }
});

$(document).bind("user_cookie_consent_changed", function(event, object) {
  console.log("User cookie consent changed: " + $(object).attr('consent') );
});

}(jQuery));
/* End of EU cookie law footer popup */