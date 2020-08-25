<?php
//create short variable names
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$feedback = trim($_POST['feedback']);

// set up some static information
$toaddress = "905846666@qq.com";
$subject = "Feedback from web site";
$mailcontent = "customer name: ".$name."\n".
                "customer email: ".$email."\n".
                "customer comments: ".$feedback."\n";
$fromaddress = "From: 1019198888@qq.com";

// invoke mail() function to send mail
mail($toaddress,$subject,$mailcontent,$fromaddress);
?>
<html>
<head>
    <title>
        Bob 's Auto Parts - Feedback submitted
    </title>
</head>
<body>
<h1>
    Feedback submitted
</h1>
<p>Your feedback has been sent.</p>
<p><?php echo n12br($mailcontent); ?></p>
</body>
</html>
