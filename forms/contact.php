<?php


  
  $receiving_email_address = 'dazzlingdivu04@gmailcom';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $dazzlingdivu04@gmail.com;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>



<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Set recipient email address
  $to = 'recipient@example.com';

  // Set sender name and email
  $from = $email;
  $sender_name = $name;

  // Set email headers
  $headers = "From: $sender_name <$from>" . "\r\n";
  $headers .= "Reply-To: $from" . "\r\n";
  $headers .= "Content-type: text/html" . "\r\n";

  // Compose the email message
  $email_message = "
    <html>
    <head>
      <title>$subject</title>
    </head>
    <body>
      <h2>$subject</h2>
      <p><strong>Name:</strong> $name</p>
      <p><strong>Email:</strong> $email</p>
      <p><strong>Message:</strong></p>
      <p>$message</p>
    </body>
    </html>
  ";

  // Send the email
  if (mail($to, $subject, $email_message, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "Error sending email.";
  }
}
?> -->