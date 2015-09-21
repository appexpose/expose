<?php

header('Access-Control-Allow-Headers: x-requested-with');
header('Access-Control-Allow-Origin: *');

// Define constants. Put your desired values here.
define( 'RECIPIENT_NAME',   'Your name' );
define( 'RECIPIENT_EMAIL',  'your@email.address' );
define( 'EMAIL_SUBJECT',    'Email subject' );

// Read and sanitize the form values
$status       = false;
//$xhr          = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
$xhr          = isset( $_POST['ajax'] )
              ? true
              : false;
$senderName   = isset( $_POST['senderName'] )
              ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", '', $_POST['senderName'] )
              : '';
$senderEmail  = isset( $_POST['senderEmail'] )
              ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", '', $_POST['senderEmail'] )
              : '';
$subject      = isset( $_POST['subject'] )
              ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", '', $_POST['subject'] )
              : EMAIL_SUBJECT;
$comment      = isset( $_POST['comment'] )
              ? nl2br(strip_tags($_POST['comment']))
              : '';
$phone        = isset( $_POST['phone'] )
              ? strip_tags($_POST['phone'])
              : '';
$company      = isset( $_POST['company'] )
              ? strip_tags($_POST['company'])
              : '';

// message body. Modify as needed.
$message_body = <<<ENDOFMESSAGE
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type"  content="text/html charset=UTF-8" />
  <title>{$subject}</title>
</head>
<body>
  <h3>{$subject}</h3>
  <p>A new message has been sent from your Ottavio website:</p>
  <table>
    <tr>
      <th>Name:</th>
      <td>{$senderName}</td>
    </tr>
    <tr>
      <th>Email:</th>
      <td>{$senderEmail}</td>
    </tr>
    <tr>
      <th>Phone:</th>
      <td>{$phone}</td>
    </tr>
    <tr>
      <th>Company:</th>
      <td>{$company}</td>
    </tr>
    <tr>
      <th>Message:</th>
      <td>{$comment}</td>
    </tr>
  </table>
</body>
</html>
ENDOFMESSAGE;

// check the mandatory values: if they exist, send the email
if ( $senderName && $senderEmail && $comment ) :
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";

  // Set the required headers:
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-UTF-8' . "\r\n";
  $headers .= 'From: ' . $senderName . ' <' . $senderEmail . '>' ."\r\n";
  $headers .= 'Reply-To: ' . $senderName . ' <' . $senderEmail . '>' . "\r\n";
  $headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";

  // If needed, add CC and/or BCC recipients
  //$headers .= 'Cc: mail1@example.com' . "\r\n";
  //$headers .= 'Bcc: mail2@example.com' . "\r\n";

  try {
    mail( $recipient, $subject, $message_body, $headers );
    $status = 'success';

  } catch (Exception $e) {
    $status = $e->getMessage();
  }

else:
  $status = 'error: incomplete data';
endif;

// Return an appropriate response to the browser
if ( $xhr ) :
  // AJAX Request
  echo $status;

else :
  // HTTP Request ?>
  <!doctype html>
  <html>
    <head>
      <title>Thanks!</title>
    </head>
    <body>
      <p>
      <?php
        if ( $status == 'success') :
          echo "<p>Thanks for sending your message! We'll get back to you shortly.</p>";
        else :
          echo "<p>There was a problem sending your message. Please try again.</p>";
        endif;
      ?>
      </p>
      <p>Click your browser's Back button to return to the page.</p>
    </body>
  </html>
<?php
endif; ?>