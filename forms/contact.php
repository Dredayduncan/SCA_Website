<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'info@spearcapitaladvisory.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;

  // SMTP Credentials and info
  $contact->smtp = array(
<<<<<<< HEAD
    'host' => "smtp.gmail.com",
    'username' => $receiving_email_address,
    'password' => '@Ydd3cp!jTgpoUb',
=======
    'host' => "send.one.com",
    'username' => $receiving_email_address,
    'password' => 'YGFX3BHjU',
>>>>>>> 2797e01ed982b483861f971290391aee834b0bf5
    'port' => '587'
  );

  if (isset($_POST['name'])){
    
    $contact->to = $receiving_email_address;
    $contact->from_name = $_POST['name'];
    $contact->from_email = $_POST['email'];
    $contact->subject = $_POST['subject'];
  

    $contact->add_message( $_POST['name'], 'From');
    $contact->add_message( $_POST['email'], 'Email');
    $contact->add_message( $_POST['message'], 'Message', 10);

    echo $contact->send();
  }

  else {
    $mail = new PHPMailer();

    // Settings
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
<<<<<<< HEAD
    $mail->Host = 'smtp.gmail.com';
    
    $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth = true;                  // enable SMTP authentication
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;                    // set the SMTP port for the GMAIL server
    $mail->Username = $receiving_email_address; // SMTP account username example
    $mail->Password = "@Ydd3cp!jTgpoUb";     
=======
    $mail->Host = 'send.one.com';
    
    $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth = true;                  // enable SMTP authentication
    $mail->Port = 587;                    // set the SMTP port for the GMAIL server
    $mail->Username = $receiving_email_address; // SMTP account username example
    $mail->Password = "YGFX3BHjU";     
>>>>>>> 2797e01ed982b483861f971290391aee834b0bf5

    $mail->setFrom($receiving_email_address);
    $mail->addAddress($receiving_email_address); 

    // Content
<<<<<<< HEAD
    //$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Newsletter Inclusion';
    $mail->Body    = 'Kindly include me in the newsletter using '. $_POST['newsEmail'];
    // $mail->AltBody = 'Kindly include me in the newsletter using '. $_POST['newsEmail'];
=======
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Newsletter Inclusion';
    $mail->Body    = 'Kindly include me in the newsletter using '. $_POST['newsEmail'];
    $mail->AltBody = 'Kindly include me in the newsletter using '. $_POST['newsEmail'];
>>>>>>> 2797e01ed982b483861f971290391aee834b0bf5

    echo $mail->send();
    header("Location: ../index.html#footer");

  }

  
?>
