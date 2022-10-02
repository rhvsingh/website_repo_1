<?php
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $visitor_email = $_POST['email'];
        $feedback = $_POST['comment'];

        $email_from = 'admin@vgetfresh.com';

        $email_subject = "New Form Submission";

        $email_body = "User Name : $name.\n".
                        "User Email : $visitor_email.\n".
                            "User Message : $feedback.\n";

        $to = "admin@vgetfresh.com";

        $headers = "From: $email_from \r\n";

        $headers.= "Reply-To: $visitor_email \r\n";

        mail($to,$email_subject,$email_body,$headers);
    }

    header("location : index.html");
    
?>