<?php 
if(isset($_POST['submit'])){
    $to = "chaowow@google.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];


    $header =" 
    Content-Type: text/html; charset=UTF-8\r\n
    MIME-Version: 1.0\r\n
    From: \"$first_name\" <$from>\r\n
    Reply-To: @4flow.com\r\n
    X-Mailer: yoursite.com mailer\r\n
    ";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
 //   mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>