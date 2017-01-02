<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $details = trim(filter_input(INPUT_POST,"details",FILTER_SANITIZE_SPECIAL_CHARS));
    
    if ($name == "" || $email == "" || $details == "") {
        echo "Please fill in the required fields: Name, Email and Details";
        exit;
    }
    if ($_POST["address"] != "") {
        echo "Bad form input";
        exit;
    }
    
    require 'inc/phpmailer/PHPMailerAutoload.php';
    
    $mail = new PHPMailer;
    
    if (!$mail->ValidateAddress($email)) {
        echo "Invalid Email Address";
        exit;
    }
    
    $email_body = "";
    $email_body .= "Name " . $name . "\n";
    $email_body .= "Email " . $email . "\n";
    $email_body .= "Details " . $details . "\n";
    
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = 'goliva011@gmail.com';          // SMTP username
    $mail->Password = 'secret'; // SMTP password
    $mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                          // TCP port to connect to

    $mail->setFrom($email, $name);
    $mail->addAddress('goliva011@gmail.com', 'Papi');     // Add a recipient
    
    $mail->isHTML(false);                                  // Set email format to HTML
    
    $mail->Subject = 'Personal Media Library Suggestion from ' . $name;
    $mail->Body    = $email_body;
    
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        exit;
    }
        
    header("location:contact-form.php?status=thanks");
}

$pageTitle = " | Contact Us";
$currentPage = "contact.php";
$currentPageSpanishEquivalent = "es/contactenos.php";

include("inc/header.php"); 

?>

<div class="main-content">
  <h1 class="title">Contact us for more information</h1>

  <div class="main-content-top clearfix">
    <div id="content-left-of-image-contact-form" class="content-left-of-image page-content">
      <?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
          echo "<p>Thanks for the email! I&rsquo;ll check out your suggestion shortly!</p>";
      } else { ?>
<!--       <form method="post" action="contact-form.php">
          
        <div class="contact-form-row">
          <label for="name">*Name:</label>
          <input type="text" id="name" name="name" size="50" required/>
        </div>
    
        <div class="contact-form-row">
          <label for="email">*Email:</label></th>
          <input type="email" id="email" name="email" required/>
        </div>
        
        <div class="contact-form-row">
          <label for="name">*Questions / Comments:</label>
          <textarea name="details" id="details" required></textarea>
        </div>
   
        <div style="display:none">
          <th><label for="address">Address</label></th>
          <td><input type="text" id="address" name="address" />
          <p>Please leave this field blank</p></td>
        </div>
        
        <div class="contact-form-row">
          <input id="contact-form-submit-btn" type="submit" value="Send" />
        </div>
      </form> -->

          <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
              <label class="required" for="name">Name:</label><br />
              <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
              <span id="name_validation" class="error_message"></span>
            </div>
            <div class="row">
              <label class="required" for="email">Email:</label><br />
              <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
              <span id="email_validation" class="error_message"></span>
            </div>
            <div class="row">
              <label class="required" for="details">Comments | Requests:</label><br />
              <textarea id="details" class="input" name="details" rows="7" cols="30"></textarea><br />
              <span id="message_validation" class="error_message"></span>
            </div>
              
              <input id="submit_button" type="submit" value="Send email" />
          </form>

  <!--         <form>
            <div class="form-group">
              <label for="name">*Name</label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            
            <div class="form-group">
              <label for="email">*Email address:</label>
              <input type="email" id="email" name="email" class="form-control">
            </div>
            
            <div class="form-group">
              <label for="comment">*Comments / Requests:</label>
              <textarea class="form-control" rows="5" name="details" id="details"></textarea>
            </div>

            <input type="submit" value="Send" />
          </form> -->
      <?php } ?>
    </div>
  </div>
</div>  <!-- end of main-content -->

<?php include("inc/footer.php"); ?>