<?php
//create short variable names
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
    <title>
        Bob 's Auto Parts - Customer Orders
    </title>
</head>
<body>
<h1>
    Bob 's Auto Parts
</h1>
<h2>
    Customer Orders
</h2>
<?php

//@$fp = fopen("$DOCUMENT_ROOT/../orders/order.txt",'rb');
//if (!$fp){
//    echo "<p><strong>No order pending. Please try again later.</strong></p>";
//    exit;
//}
//while (!feof($fp)){
//    $order = fgets($fp,999);
//    echo $order."<br/>";
//}
$orders = file("$DOCUMENT_ROOT/../orders/order.txt");
$number_of_orders = count($orders);
if ($number_of_orders ==0 ){
    echo "<p><strong>No order pending. Please try again later.</strong></p>";

}
//for ($i = 0; $i < $number_of_orders; $i++){
//    echo $orders[$i]."<br />";
//}
echo "<table border=\"1\">\n";
echo "<tr><th bgcolor=\"#ccccff\">Order Date</th>
          <th bgcolor=\"#ccccff\">Tires</th> 
          <th bgcolor=\"#ccccff\">Oil</th>
          <th bgcolor=\"#ccccff\">Spark Plugs</th>
          <th bgcolor=\"#ccccff\">Total</th>
          <th bgcolor=\"#ccccff\">Address</th>
          </tr>";
for ($i = 0; $i < $number_of_orders; $i++){
    $line = explode("\t",$orders[$i]);//explode函数是用来分割字符串的,前面传的是分隔符，后面传的是要被分割的数据
    $line[1] = intval($line[1]);//intval函数是将字符串变成整数的函数
    $line[2] = intval($line[2]);
    $line[3] = intval($line[3]);
    echo "<tr>
<td>".$line[0]."</td>
<td align=\"right\">".$line[1]."</td>
<td align=\"right\">".$line[2]."</td>
<td align=\"right\">".$line[3]."</td>
<td align=\"right\">".$line[4]."</td>
<td>".$line[5]."</td>
</tr>";
}
echo "</table>";
?>

</body>
</html>
