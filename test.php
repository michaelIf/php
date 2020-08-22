
<?php
$products = array(array('TIR','tires',100),array('OIL','oil',10),array('SPK','spark plugs',4));
echo "before sort is <br />";
for ($rows = 0; $rows < 3; $rows++){
    for ($col = 0; $col < 3; $col++){
        echo '|'.$products[$rows][$col];

    }
    echo "|<br />";
}
function compare($x,$y){
    if ($x[2] == $y[2]){
        return 0;
    }elseif ($x[2] < $y[2]){
        return -1;
    }else{
        return 1;
    }
}
usort($products,'compare');
echo "\n";
echo '*****************************************************';
echo "\n";
echo "<br/>after sort is <br />";
for ($rows = 0; $rows < 3; $rows++){
    for ($col = 0; $col < 3; $col++){
        echo '|'.$products[$rows][$col];

    }
    echo "|<br />";
}
echo "\n";
//test intval
$ss = '2 tires';
$tt = intval($ss);
echo $tt;

function before_case(){
    echo "\n";
    echo '********************************';
    echo "\n";
}
//test 数组指针
before_case();
$arr = array(1,2,3);
$value = end($arr);
//echo $value;
while ($value){
    echo "$value \n";
    $value = prev($arr);
}



echo "\n";
echo reset($arr);
print_r(each($arr));
echo next($arr);
echo current($arr);
echo end($arr);
echo prev($arr);

// test array_walk函数
before_case();
function my_print($tmp){
    echo "$tmp \n";
}
array_walk($arr,'my_print');
function my_print2($tmp2,$key,$factor){
    echo "$tmp2 * $factor";
}
array_walk($arr,'my_print2',3);

// test array_count_values
before_case();
$arr = array(1,3,4,5,3,2,1,2,3,4,3);
$ac = array_count_values($arr);
print_r($ac);

//test extract
before_case();
$arr = array('key1'=>'value1','key2'=>'value2','key3'=>'value3');
extract($arr);
echo "$key1 $key2 $key3";
echo "\n";
echo "$key3";

?>
