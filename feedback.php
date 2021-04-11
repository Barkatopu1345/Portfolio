<?php
    $name = $_POST['name'];
    $visitor_email = $_POST["email"];
    $message = $_POST["message"];
    $echo "Thanks"

        $eamil_from="1731466@iub.edu.bd";
        $email_subject="New Form Submission";
        $email_body = "User: $name.\n".
                        "User Email: $visitor_email.\n".
                            "User Message: $message.\n";




    $to = "barkatopu1345@gmail.com";
    $headers = "From: $eamil_from \r\n";
    $headers = "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: skills.html");                            


?>