<?php include("header.php"); ?>


<section class="sub-bnr">
  <div class="position-center-center">
    <div class="container">
      <h4>Contact us</h4>
      <hr class="main">
      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Contact us</li>
      </ol>
    </div>
  </div>
  <div class="scroll"> <a href="#content" class="go-down"></a></div>
</section>


<section class="contact-section pb-100 pt-100" id="content">
  <div class="container">
    <div class="section-title text-center">
      <span>Contact Us</span>
      <h2>Get In Touch With Us</h2>
      <p>Dong Fang International Co.</p>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="row">
          <div class="col-lg-12 col-sm-6">
            <div class="contact-card">
              <i class="fas fa-mobile-alt"></i>
              <ul>
                <li>
                  <a href="tel:">
                    +92 342 3939 058
                  </a>
                </li>
                <li>

                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-12 col-sm-6">
            <div class="contact-card">
              <i class="far fa-envelope"></i>
              <ul>
                <li>
                  <a href="#">
                    Dongfang@gmail.com
                  </a>
                </li>
                <li>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-12 col-sm-6 offset-lg-0 offset-sm-3">
            <div class="contact-card">
              <i class="fas fa-map-marker-alt"></i>
              <ul>
                <li>
                  <a href="https://www.google.com/maps/?cid=1960018890830958322">
                    Plot No.N2 S.I.T.E jamshoro, Kotri, Jamshoro, Sindh, Pakistan
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="contact-area">
          <h3>Let's Talk</h3>
          <form id="contactForm" method="post" novalidate="true">

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" name="name" id="name" class="form-control" required=""
                    data-error="Please enter your name" placeholder="Your Name">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control" required=""
                    data-error="Please enter your email" placeholder="Your Email">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="number" name="number" id="number" class="form-control" required=""
                    data-error="Please enter your number" placeholder="Phone Number">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" name="subject" id="subject" class="form-control" required=""
                    data-error="Please enter your subject" placeholder="Your Subject">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <textarea name="message" class="message-field" id="message" rows="5" required=""
                    data-error="Please type your message" placeholder="Write Message"></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-sm-12">
                <button type="submit" name="submit" class="default-btn contact-btn disabled"
                  style="pointer-events: all; cursor: pointer;">
                  Send Message
                </button>

               
                <div id="msgSubmit" class="h3 alert-text text-center hidden"></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
if (isset($_POST["submit"])) {
    // Get the form fields and remove whitespace
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["number"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Set your email address where you want to receive emails
    $to = "mbux.270@gmail.com";

    // Set your email subject
    $subject = "New contact form submission from $name";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Subject: $subject\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers
    $email_headers = "From: $name <$email>";

    // Send the email
    if (mail($to, $subject, $email_content, $email_headers)) {
      // Email sent successfully
      echo '<script>alert("Thank you for your message. We will contact you shortly.");</script>';
  } else {
      // Email not sent
      echo '<script>alert("Oops! Something went wrong and we couldn\'t send your message.");</script>';
  }
} 
?>


<?php include("footer.php"); ?>