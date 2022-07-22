<?php

function createHeaderNavDropdownElements($arr) {

  foreach($arr as $inner) {
    echo "
      <li class='header-nav__dropdown-element'>

        <a class='header-nav__dropdown-element-inner-container' href='#'>

          <div class='header-nav__dropdown-element-left-side'>
            <img class='header-nav__dropdown-element-img' src='resources/$inner[0]'>
          </div>

          <div class='header-nav__dropdown-element-right-side'>
            <h4 class='header-nav__dropdown-element-name'>$inner[1]</h4>
            <p class='header-nav__dropdown-element-desc'>
              $inner[2]
            </p>
          </div>

        </a>

      </li>";
  }
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mozilla</title>
  <link rel="stylesheet" href="css/main.css">

</head>

<body class="body">

  <header class="header">

    <a class="mozilla-logo" href="https://www.mozilla.org/en-US/" target="_blank">
      <img class="img mozilla-logo__img" src="resources/mozilla_logo.svg">
    </a>

    <nav class="header-nav">

      <ul class="header-nav__list">

        <li class="header-nav__list-item">

          <h3 class="header-nav__list-item-name">Firefox Browsers</h3>

          <div class="header-nav__dropdown-container">

            <ul class="header-nav__dropdown">
  
              <div class="header-nav__dropdown-primary-elements-container">
    
                <?php
  
                  $arr = [
                    [
                      'firefox_browsers/firefox_icon.svg',
                      'Firefox for Desktop', 
                      'Get the non-for-profit-backed browser on Windows, Mac or Linux.'
                    ],
                    [
                      'firefox_browsers/firefox_icon.svg',
                      'Firefox for Android', 
                      'Get the customizable mobile browser for Android smartphones.'
                    ],
                    [
                      'firefox_browsers/firefox_icon.svg',
                      'Firefox for iOS', 
                      'Get the mobile browser for your iPhone or iPad.'
                    ],
                    [
                      'firefox_browsers/firefox_focus_icon.svg',
                      'Firefox Focus', 
                      'Simply private mobile browsing.'
                    ],
                    [
                      'firefox_browsers/privacy_heart_icon.svg',
                      'Privacy Promise', 
                      'Learn how Firefox treats your data with respect.'
                    ],
                    [
                      'firefox_browsers/blog_icon.svg',
                      'Firefox Blog', 
                      'Read about new Firefox features and ways to stay safe online.'
                    ],
                    [
                      'firefox_browsers/notes_icon.svg',
                      'Release Notes', 
                      'Get the details ont he latest Firefox updates.'
                    ],
                  ];
  
                  createHeaderNavDropdownElements($arr);
  
                ?>
    
              </div>
  
              <a class="header-nav__dropdown-last-element" href="#">View all Firefor Browsers</a>
  
            </ul>

          </div>

        </li>

        <li class="header-nav__list-item">

          <h3 class="header-nav__list-item-name">Products</h3>

          <div class="header-nav__dropdown-container">

            <ul class="header-nav__dropdown">

              <div class="header-nav__dropdown-primary-elements-container">

                <?php

                  $arr = [
                    [
                      'products/monitor.svg',
                      'Firefox Monitor', 
                      'See if your email has appeared in a company\'s data breach.'
                    ],
                    [
                      'products/facebook_container.svg',
                      'Facebook Container', 
                      'Help prevent Facebook from collecting your data outside their site.'
                    ],
                    [
                      'products/pocket.svg',
                      'Pocket', 
                      'Save and discover the best stories from across the web.'
                    ],
                    [
                      'products/vpn.svg',
                      'Mozilla VPN', 
                      'Get protection beyoun your browser, on all your devices.'
                    ],
                    [
                      'products/product_promise.svg',
                      'Product Promise', 
                      'Learn how each Firefox product protects and respects your data.'
                    ],
                    [
                      'products/relay.svg',
                      'Firefox Relay', 
                      'Sign up for new accounts without handling over your email address.'
                    ],
                    [
                      'products/private_network.svg',
                      'Firefox Private Network (beta)', 
                      'Protect your browser\'s connection to the internet.'
                    ],
                    [
                      'products/mdn_plus.svg',
                      'MDN Plus', 
                      'New features and tools for a customized MDN experience'
                    ],
                  ];

                  createHeaderNavDropdownElements($arr);

                ?>

              </div>

              <a class="header-nav__dropdown-last-element" href="#">View all Products</a>

            </ul>

          </div>

        </li>

        <li class="header-nav__list-item">

          <h3 class="header-nav__list-item-name">Who We Are</h3>

          <div class="header-nav__dropdown-container">

            <ul class="header-nav__dropdown">

              <div class="header-nav__dropdown-primary-elements-container">

                <?php

                  $arr = [
                    [
                      'who_we_are/manifesto.svg',
                      'Mozilla Manifesto', 
                      'Learn about the values and principles that guide our mission.'
                    ],
                    [
                      'who_we_are/foundation.svg',
                      'Mozilla Foundation', 
                      'Meet the not-for-profit behind Firefox that stands for a better web.'
                    ],
                    [
                      'who_we_are/get_involved.svg',
                      'Get involved', 
                      'Join the fight for a healthy internet.'
                    ],
                    [
                      'who_we_are/leadership.svg',
                      'Leadership', 
                      'Meet the team that\'s building technology for a better internet.'
                    ],
                    [
                      'who_we_are/careers.svg',
                      'Careers', 
                      'Work for a mission-driven organization that makes people-first products.'
                    ],
                    [
                      'firefox_browsers/blog_icon.svg',
                      'Mozilla Blog', 
                      'Learn about Mozilla and the issues that matter to us.'
                    ],
                  ];

                  createHeaderNavDropdownElements($arr);

                ?>

              </div>

              <a class="header-nav__dropdown-last-element" href="#">More About Mozilla</a>

            </ul>

          </div>

        </li>

        <li class="header-nav__list-item">

          <h3 class="header-nav__list-item-name">Innovation</h3>

          <div class="header-nav__dropdown-container">

            <ul class="header-nav__dropdown">

              <div class="header-nav__dropdown-primary-elements-container">

                <?php

                  $arr = [
                    [
                      'innovation/hubs.svg',
                      'Mozilla Hubs', 
                      'Gather in this interactive, online, multi-dimensional social space.'
                    ],
                    [
                      'innovation/firefox_dev.svg',
                      'Firefox Developer Edition', 
                      'Get the Firefox browser built just for developers.'
                    ],
                    [
                      'innovation/web_docs.svg',
                      'MDN Web Docs', 
                      'Check out the home for web developer resources.'
                    ],
                    [
                      'innovation/common_voice.svg',
                      'Common Voice', 
                      'Donte your voice so the future of the web can hear everyone.'
                    ],
                  ];

                  createHeaderNavDropdownElements($arr);

                ?>

              </div>

              <a class="header-nav__dropdown-last-element" href="#">More Mozilla Innovation</a>

            </ul>

          </div>

        </li>

      </ul>

    </nav>

    <a class="button header__button" href="#">Get Mozilla VPN</a>

  </header>    


  <script defer src="js/classes/DropdownHandler.js"></script>
  <script defer src="js/main.js"></script>

</body>

</html>