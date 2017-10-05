
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Drupal dev</title>

    <link rel=stylesheet type=text/css href="/css/style.css">

    <script src="/js/script.js"></script>

    <link rel="icon" type="image/png" href="/static/favicon.png" />

</head>
<body>

  <div id="content">

    <!-- Intro Section -->
    <section id="intro">
      <!--Navigation -->
      <div class="global-nav">
        <div class="content-row">
          <div class="global-nav-logo block">
            <a href="/">
              <img class="logo"
               width="64"
               height="12"
               src="/static/picnic-logo.svg" />
            </a>
          </div>
          <div class="global-nav-links block hide-on-mobile">
            <a href="#pricing" onclick="smoothScroll('pricing');">Pricing</a>
            <a href="https://airtable.com/shrTWQJIihkOWLppd/tblvX8EY2XjSoV7mq" target="_blank">Roadmap</a>
            <a href="http://support.picnic.design" target="_blank">Support</a>
            <form class="global-login-button" action="/login" method="POST">
                <input type="submit" value="Login" />
            </form>
          </div>
        </div>
      </div>

      <!-- Hero Section -->
      <div class="hero content-row columns-halves">
        <div class="block hero-screenshot">
          <img src="/static/landing/picnicapp-mobile.png" class="hero-ui show-inline-on-mobile" />
          <img src="/static/landing/PicnicApp.png" class="hero-ui hide-inline-on-mobile" />
          <img src="/static/landing/basket.png" class="hero-deco" />
        </div>
        <div class="block hero-details">
            <h1>Work<br/>Together.</h1>
            <div class="hero-summary">
              Design seamlessly in the <span class="dont-break">same Sketch file.
                <div class="sketch-logo">
                  <img class="sparkle" src="/static/landing/sketch_sparkle.gif" />
                  <img class="sketch" src="/static/landing/sketch_sparkle.svg" />
                </div>
              </span>
            </div>

            <div class="mailchimp">
                <form action="//design.us12.list-manage.com/subscribe/post?u=c27d7144122c8187390230390&amp;id=c0f9f680fb&NOTIFY=true" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <input placeholder="Get on the mailing list" type="email" value="" name="EMAIL" class="required mailchimp-email" id="mce-EMAIL">
                    <input type="submit" value="&#x21a3;" name="subscribe" id="mc-embedded-subscribe" class="mailchimp-button">
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c27d7144122c8187390230390_c0f9f680fb" tabindex="-1" value=""></div>
                </form>
            </div>
            <!-- end mailchimp -->

            <div class="landing-mailing-list-message">
                We'll send you an email when Picnic is released.
            </div>

            <div class="hero-download hide-on-mobile">
              <a href="#" class="download-button">Download the Beta</a>
              <span class="software-version">Version 1.0</span>
            </div>
            <div class="hero-requirement hide-on-mobile">
              * Requires a Dropbox account
            </div>
        </div>
      </div>

      <!-- Summary -->
      <div class="summary background-row">
        <div class="content-row columns-full-padded">
          <div class="block">
            <img src="/static/landing/frisbee.png" class="frisbee" />
            <h2>Stop, Collaborate, and Listen.</h2>
            <p>Picnic is a plugin that allows teammates to work better together in Sketch. It ships with a handy-dandy project viewer so you can see what everyone is working on. </p>
          </div>
        </div>

    </div>
      <!-- End Section -->
    </section>
    <!-- Section -->



    <!-- Footer -->
    <footer id="footer">
      <div class="content-row columns-halves">
        <div class="block">
          <a href="http://thomasstreet.com">
            <img src="/static/landing/built-by-ts.svg" />
          </a>
        </div>
        <div class="block footer-screens">
          <img src="/static/landing/footer-screens.png" />
        </div>
      </div>
    </footer>
  </div>

</body>

</html>
