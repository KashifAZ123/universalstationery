<?php 
if(isset($_POST['submit'])){
    $to = "kashaazis12@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $subject = "Form submission";
    $city = $_POST['city'];
    $zipcode = $_POST['zip_code'];
    $message = $first_name . " " . $country . " wrote the following:" . "\n\n" . $_POST['address'];
   

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
 
    }
?>
