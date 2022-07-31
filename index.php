<?php

function createHeaderNavDropdownElements($arr) {
  foreach($arr as $inner) {
    echo "
      <li class='header-nav__dropdown-element'>

        <a class='header-nav__dropdown-element-inner-container' href='#'>

          <div class='header-nav__dropdown-element-left-side'>
            <img class='header-nav__dropdown-element-img' src='resources/$inner[0]' alt='Icon representing adjacent content.'>
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

function createArticles($arr) {
  $i = -1;

  foreach($arr as $val) {
    $i++;
    $special = '';
    if($i === 0)
      $special = 'featured-products-article__button--black';

    echo <<<END
      <article class="featured-products-article">

        <div class="featured-products-article__main-img-container">

          <img class="featured-products-article__main-img"
            src="resources/main/$val[0]" alt="$val[1]">

        </div>
      
        <div class="featured-products-article__text-container">

          <img class="featured-products-article__header-img"
            src="resources/main/$val[2]">
      
          <h3 class="featured-products-article__header">$val[3]</h3>
      
          <p class="featured-products-article__paragraph">$val[4]</p>
      
          <a class="featured-products-article__button $special button" href="#">$val[5]</a>

        </div>

      </article>
    END;
  }
  
}

function createFooterNavElements($header, $arr) {

  echo "<div>
    <h4 class='the-footer__first-nav-header'>$header</h4>
    
    <ul class='the-footer__first-nav-list'>";

  foreach($arr as $val) {
    echo "<li class='the-footer__first-nav-list-item'>
            <a class='the-footer__first-nav-link' href='#'>$val</a>
          </li>";
  }

  echo "</ul>
      </div>";

}

function createFooterFollowListItems($arr) {
  foreach($arr as $val) {
    echo "
      <li class='the-footer__follow-list-item'>
        <a class='the-footer__icon-container' href='#'>
          <img class='the-footer__icon' src='resources/footer/$val.svg' alt='$val icon'>
        </a>
      </li>
    ";
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
  <script defer src="js/classes/HeaderNavDropdownDesktop.js"></script>
  <script defer src="js/classes/HeaderNavDropdownMobile.js"></script>
  <script defer src="js/classes/HeaderMenuDropdownMobile.js"></script>
  <script defer src="js/classes/FullFormActivator.js"></script>
  <script defer src="js/main.js"></script>
  <noscript>
    <style>
      .love-web__initially-hidden {
        display: block !important;
      }
    </style>
  </noscript>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Zilla+Slab:wght@700&display=swap" rel="stylesheet">

</head>

<body class="body">

  <h1 class="invisible-h1">Internet for people, not profit.</h1>

  <header class="header">

    <div class="header__header-content">

      <a class="header__header-child mozilla-logo" href="https://www.mozilla.org/en-US/" target="_blank">
        <img class="mozilla-logo__img" src="resources/general/mozilla_logo.svg" alt="Logo of Mozilla organization.">
      </a>

      <nav id="header-nav" class="header__header-child header-nav">

        <div class="header-nav__vpn-button-mobile-container">
          <a class="button header__vpn-button" href="#">Get Mozilla VPN</a>
        </div>

        <ul class="header-nav__list">

          <li id="header-nav-activator-1" class="header-nav__list-item">

            <h3 class="header-nav__list-item-name">Firefox Browsers</h3>

            <div id="header-nav-dropdown-1" class="header-nav__dropdown-container">

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

          <li id="header-nav-activator-2" class="header-nav__list-item">

            <h3 class="header-nav__list-item-name">Products</h3>

            <div id="header-nav-dropdown-2" class="header-nav__dropdown-container">

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

          <li id="header-nav-activator-3" class="header-nav__list-item">

            <h3 class="header-nav__list-item-name">Who We Are</h3>

            <div id="header-nav-dropdown-3" class="header-nav__dropdown-container">

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

          <li id="header-nav-activator-4" class="header-nav__list-item">

            <h3 class="header-nav__list-item-name">Innovation</h3>

            <div id="header-nav-dropdown-4" class="header-nav__dropdown-container">

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

      <a class="header__header-child button header__vpn-button header__vpn-button-desktop" href="#">Get Mozilla VPN</a>

      <button id="header__toggle-menu-button" class="header__toggle-menu-button">
        <img src="resources/general/menu_icon.svg" alt="Icon representing dropdown menu.">
      </button>

    </div>

  </header>


  <main>

    <article class="width-cap celebrating-block">

      <div class="celebrating-block__text-container">

        <h2 class="celebrating-block__header">Celebrating 10 years of Pocket</h2>

        <p class="celebrating-block__paragraph">
          The distraction-free, private place to save 
          and discover trustworthy, interesting articles online.
        </p>

        <a class="celebrating-block__button button" href="#">Sign up for Pocket</a>

      </div>

      <div class="celebrating-block__img-container">

        <img class="celebrating-block__img" src="resources/main/pocker_articles.jpg" 
          alt="Example of thought-provoking articles you can save with Pocket feature.">

      </div>

    </article>

    <div class="more-power-background">

      <article class="width-cap more-power-block">
  
        <div class="more-power-block__img-container">
  
          <img class="more-power-block__img" 
            src="resources/main/more_power.png" alt="Two people taking care of tree.">
  
        </div>
  
        <div class="more-power-block__text-container">
  
          <h2 class="more-power-block__header">More power to you.</h2>
    
          <p class="more-power-block__paragraph">
            Mozilla puts people before profit, creating products, technologies
            and programs that make the internet healthier for everyone.
          </p>
    
          <a class="generic-blue-link" href="#">Learn more about us</a>
          
        </div>
  
      </article>

    </div>

    <article class="width-cap featured-products">

      <h2 class="featured-products__header">Featured Mozilla Products</h2>

      <?php

        $arr = [
          [
            'vpn_laptop.png',
            'Laptop running Mozilla VPN.',
            'vpn_logo.svg',
            'Protection for your whole device, on every device',
            'Surf, stream, game, and get work done
            while maintaining your privacy online.',
            'Get Mozilla VPN'
          ],
          [
            'for_internet_lovers.png',
            'Laptop running Firefox.',
            'firefox.svg',
            'Firefox is for (internet) lovers',
            'Super fast and fiercely independent. Get the
            only browser that works to make the internet
            better for everyone.',
            'Explore Firefox'
          ],
          [
            'sunny_side.jpg',
            'A person having fun with the amazing Pocket feature.',
            'pocket.svg',
            'Welcome to the web, sunny side up',
            'Millions of people rely on Pocket to save
            and discover the best articles, stories
            and videos on the web. As part of the Firefox family,
            Pocket has the same dedication to privacy.',
            'Try Pocket'
          ],
          [
            'relay.png',
            'Firefox with Firefox Relay.',
            'relay.svg',
            'Un-spam your life with Firefox Relay',
            'Generate real, working email aliases so
            you don\'t have to compromise your real
            address and clutter up your inbox till
            the end of time.',
            'Try Relay'
          ],
        ];

        createArticles($arr);

    ?>

    </article>

    <div class="healthy-internet-background">

      <article class="width-cap healthy-internet">
  
        <div class="healthy-internet__text-container">
  
          <h2 class="healthy-internet__header">Support a healthy internet.</h2>
    
          <p class="healthy-internet__paragraph">
            The non-profit Mozilla Foundation supports online
            privacy & security, trustworthy artificial intelligence
            (AI), accountability for big tech corporations, and more.
          </p>
    
          <a class="healthy-internet__link" href="#">Visit the Mozilla Foundation</a>
  
        </div>
  
        <div class="healthy-internet__img-container">
          <img class="healthy-internet__img" src="resources/main/healthy_internet.png" alt="People cheering.">
        </div>
  
      </article>

    </div>

    <article class="width-cap love-web">

      <div class="love-web__img_container">
        <img class="love-web__img" src="resources/main/love_the_web.png" alt="People marching.">
      </div>

      <div class="love-web__text-and-form-container">

        <h2 class="love-web__header">Love the Web</h2>
  
        <p class="love-web__paragraph">
          Get the Mozilla newsletters
          and help us keep the web open and free.
        </p>

        <form class="love-web__form" action="script.php" method="POST">
          
          <label id="love-web-opener-1" class="love-web__part">

            <span class="love-web__descriptor">Your email address:</span>
            <input class="very-cool-input" 
              placeholder="yourname@example.com" type="text">

          </label>

          <div class="love-web__initially-hidden">
              
            <label class="love-web__part">

              <span class="love-web__descriptor">Select country or region:</span>
            
              <select class="very-cool-input cool-select">
                <option>Algeria</option>
                <option>Chad</option>
                <option>Cyprus</option>
                <option>Finland</option>
                <option>Germany</option>
                <option>Tunisia</option>
                <option>Uganda</option>
                <option>United Kingdom</option>
                <option>United States</option>
              </select>

            </label>

            <label class="love-web__part">

              <span class="love-web__descriptor">Select language:</span>

              <select class="very-cool-input cool-select">
                <option>Basha Indonesia</option>
                <option>Deutsch</option>
                <option>English</option>
                <option>Polski</option>
              </select>

            </label>
                      
            <fieldset class="love-web__part clean-fieldset" class="love-web__part">

              <legend class="love-web__descriptor">I want information about</legend>
              
              <label>
    
                <input class="clean-check-radio" type="checkbox">
                <span>Mozilla Foundation</span>
    
              </label>

              <label>
    
                <input class="clean-check-radio" type="checkbox">
                <span>Firefox<span>

              </label>

            </fieldset>

            <fieldset class="love-web__part clean-fieldset" class="love-web__part">

              <legend class="love-web__descriptor">Format</legend>

              <label>

                <input class="clean-check-radio" type="radio" name="format" value="html">
                <span>HTML</span>

              </label>

              <label>

                <input class="clean-check-radio" type="radio" name="format" value="text">
                <span>Text<span>

              </label>

            </fieldset>

            <label class="love-web__part">

              <input required class="clean-check-radio" type="checkbox">
              <span class="love-web__im-okay-text">
                I'm okay with Mozilla handling my info as explained in 
                <a class="generic-blue-link" href="#">this Privacy Notice</a>
              </span>

            </label>

          </div>

          <input id="love-web-opener-2" class="love-web__submit button" type="submit" value="Sign Up Now">

        </form>

      </div>

    </article>

    <article class="firefox-account">

      <div class="width-cap firefox-account-content">

        <div class="firefox-account-content__left">

          <div class="firefox-account-content__img-container">
            <img class="firefox-account-content__img" src="resources/general/special_firefox_icon.svg" alt="Abstract icon representing Firefox browser.">
          </div>
          <h2 class="firefox-account-content__header">A Firefox Account protects you rather than profits off you.</h2>

        </div>

        <a class="button firefox-account-content__button" href="#">Learn more</a>

      </div>

    </article>

  </main>

  <footer class="the-footer">

    <div class="width-cap the-footer-content">

      <a class="the-footer__logo-container" href="#">
        <img class="the-footer__logo" src="resources/general/mozilla_logo_white.svg" alt="White version of Mozilla logo.">
      </a>

      <nav class="the-footer__first-nav">

        <?php

          createFooterNavElements(
            'Company',
            ['Mozilla Manifesto', 'Press Center',
            'Corporate Blog', 'Careers', 'Contact',
            'Donate']);

          createFooterNavElements(
            'Resources',
            ['Privacy Hub', 'Browser Comparsion', 'Brand Standards']);

          createFooterNavElements(
            'Support', ['Product Helo', 'File a Bug']);

          createFooterNavElements(
            'Developers',
            ['Developer Edition', 'Beta',
            'Beta for Android', 'Nightly', 'Nightly for Android',
            'Enterprise', 'Tools']);

        ?>

        <div class="the-footer__follow-container">

          <div class="the-footer__follow-top">

            <h5 class="the-footer__follow-header">Follow @Mozilla</h5>

            <ul class="the-footer__follow-list">

              <?php
                createFooterFollowListItems(['twitter', 'instagram', 'linked-in',
                'tik-tok', 'spotify']);
              ?>

            </ul>

          </div>

          <div class="the-footer__follow-bottom">

            <h5 class="the-footer__follow-header">Follow @Firefox</h5>

            <ul class="the-footer__follow-list">

              <?php
                createFooterFollowListItems(['twitter', 'instagram', 'youtube']);
              ?>

            </ul>
            
          </div>

        </div>

      </nav>

      <div>

        <nav>

          <ul>

            <li><a href="#">Website Privacy Notice</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">Legal</a></li>
            <li><a href="#">Community Participation Guidelines</a></li>
            <li><a href="#">About this site</a></li>

          </ul>

          <p>
            Visit <a href="#">Mozilla Corporation's </a>
            not-for-profit parent, <a href="#">the Mozilla Foundation.</a>
            Portions of this content are ©1998-2022 by
            individual mozilla.org contributors. Content available under
            a <a href="#">Creative Commons license.</a> 
          </p>

        </nav>

        <div>

          <a href="#">Language</a>
          
          <select class="very-cool-input cool-select">
                <option>English</option>
                <option>Basha Indonesia</option>
                <option>Deutsch</option>
                <option>Polski</option>
          </select>

        </div>

      </div>
    
    </div>

  </footer>

</body>

</html>