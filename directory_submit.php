<html>
<head>
    <title>Site submission results</title>
</head>
<body>
<h1>
    Site submission results
</h1>
<?php
$url = $_REQUEST['url'];
$email = $_REQUEST['email'];

$url = parse_url($url);
$host = $url['host'];

if(!($ip = gethostbyname($host))){
    echo "Host for url dose not have valid ip";
    exit;
}

echo "Host is at IP: $ip <br />";
$email = explode('@',$email);
$emailhost = $email[1];

if(!getmxrr($emailhost,$mxhostsarr)){
    echo 'Email address is not at valid host';
    exit;
}
echo 'Email is delivered via: ';
foreach ($mxhostsarr as $mx){
    echo "$mx";
}
echo '<br /> All submitted details are ok.<br>';
echo 'Thank you for submitting your site.<br />'.'It will be visited by one of our staff members soon.'


?>

</body>
</html>


