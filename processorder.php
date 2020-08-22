<?php
//create short variable names
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
//$find = $_POST['find'];
$address = $_POST['address'];
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
echo "root is $DOCUMENT_ROOT";
$date = date('H:i,jS F Y');
?>
<html>
<head>
    <title>
        Bob 's Auto Parts - Order Results
    </title>
</head>
<body>
<h1>
    Bob 's Auto Parts
</h1>
<h2>
    Order Results
</h2>
<?php
echo "<p>Order processed at".date('H:i, JS F Y')."</p>";
echo '<p>Your order is as follows: </p>';

$totalqty = 0;
$totalqty =$tireqty + $oilqty + $sparkqty;
echo "Items ordered: ".$totalqty."<br/>";
if ($totalqty==0){
    echo '<p style="color:red">';
    echo 'You did not order anything on the previous page!';
    echo '</p>';
    exit;
}else{
    if ($tireqty > 0)
        echo "$tireqty tires<br/>";
    if ($oilqty > 0)
        echo $oilqty. ' bottles of oil<br/>';
    if ($sparkqty > 0)
        echo $sparkqty. ' spark plugs<br/>';
}


$totalamount = 0.00;
define('TIREPRICE',100);
define('OILPRICE',10);
define('SPARKPRICE',4);
$totalamount = $tireqty*TIREPRICE + $oilqty*OILPRICE + $sparkqty*SPARKPRICE;
$totalamount = number_format($totalamount,2,'.',' ');
echo "<p>Total of order is $".$totalamount."</p>";
//echo "Subtotal: $".number_format($totalamount,2)."<br/>";
//$taxrate = 0.10;//local tax rate is 10%
//$totalamount = $totalamount * (1+$taxrate);
//echo "Total include tax: $".number_format($totalamount,2)."<br />";
echo "<p>Address to ship to is $address.</p>";
$outputstring = $date."\t".$tireqty." tires \t".$oilqty." oil \t".$sparkqty." spark plugs\t\$".$totalamount."\t". $address."\n";

//echo 'isset($tireqty): '.isset($tireqty).'<br />';
//echo 'isset($nothere): '.isset($nothere).'<br />';
//echo 'empty($tireqty): '.empty($tireqty).'<br />';
//echo 'empty($nothere): '.empty($nothere).'<br />';

//open file for appending
@$fp = fopen("$DOCUMENT_ROOT/../orders/order.txt",'ab');
flock($fp,LOCK_EX);
if (!$fp){
    echo "<p><strong>Your order could not be processed at this time. Please try again later.</strong></p></body></html>";
    exit;
}
fwrite($fp,$outputstring,strlen($outputstring));
flock($fp,LOCK_UN);
fclose($fp);
echo "<p>Order written.</p>";
?>
</body>
</html>
