<?php

$to="info@vgetfresh.com";
$subject="New Form Submission";
$message="I am very Happy";
$headers="From: singhrajaharshvardhan004@gmail.com";

if(mail($to,$subject,$message,$headers))
{
    echo"Mail send Successfully";
}
else
{
    echo"Can not send mail";
}

?>