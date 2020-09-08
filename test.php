
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

// test printf
before_case();
$a = 12;
echo "a is $a";
echo "\n";
printf("a is %.b",$a);//二进制
echo "\n";
printf("a is %.3f",$a);//三位小数
echo "\n";
printf("a is %.x",$a);//16进制小写字母

// test explode implode join
before_case();
$b = '1111@qq.com';
$email_arr = explode('@',$b);
print_r($email_arr);
echo "\n";
$new_email = implode('@',$email_arr);
echo "$new_email";

// test str 函数
before_case();
$c = 'michael';
echo strtoupper($c); //转换成大写
echo "\n";
$d = 'MICHAEL';
echo strtolower($d);//转换成小写
echo "\n";
echo ucfirst($c);//将字符串首字母转换成大写
echo "\n";
$e = 'I love PHP very much';
echo ucwords($e);//将字符串每个单词首字母转换成大写

//test 字符串格式化
before_case();
$f = 'I love "php" very much';
echo addslashes($f);//格式化字符串
$g = addslashes($f);
echo "\n";
echo stripslashes($g);//去掉格式化
//
function change_line(){
    echo "\n";
}
// test strtok substr
before_case();
$h = 'this is a feedback';
$token = strtok($h,' ');//返回分割后第一个字符串
echo $token;
echo "\n";
$i = "Your customer service is excellent";
echo substr($i,1);//从1到结尾的字符串
echo "\n";
echo substr($i,-9);//倒数9个字符串
echo "\n";
echo substr($i,0,4);//从0开始，4个字符
change_line();
echo substr($i,4,-13);//从4开始，到倒数13个字符

// test字符串排序
before_case();
$j = '2';
$k = '12';
echo strcmp($j,$k);//顺序排列字符串，j在K后面就返回1，反之返回-1，相等返回0
change_line();
echo strnatcmp($j,$k);//按自然顺序排列
change_line();
echo strlen($j);//求字符串长度

//字符串查找
before_case();
$l = 'I love php very much, and I will study It, until I \'m good at it.';
$m = 'it';
echo strstr($l,$m);//查找字符串，并返回查找内容直到字符串结尾
change_line();
echo stristr($l,$m);//不区分大小写
change_line();
echo strchr($l,$m);
change_line();
echo strrchr($l,$m);
change_line();
echo strpos($l,$m);//返回字符串下标

//字符串替换
before_case();
$n = 'you are a fool ,really fool, I will not buy anything from a fool company';
echo str_replace('fool','***',$n);//用×××替换fool
change_line();
echo substr_replace($n,'X',10,4);//用X替换9以后长度为4的字符串

//正则表达式
before_case();
$o = preg_match("[fool]",$n);//在PHP5.3版本以后，ereg函数被preg_match代替
echo $o;
change_line();
$p = preg_replace("[fool]",'XXX',$n);//在PHP5.3版本后ereg_replace被preg_replace代替
echo $p;

//分割字符串
before_case();
$q = '1111@qq.com';
$arr = preg_split("[\.|@]",$q);//在PHP5.3版本后split被preg_split代替
print_r($arr);

//测试参数
before_case();
function var_args(){
    echo "number of parameters: ";
    echo func_num_args();//得到参数个数
    change_line();
    $args = func_get_args();//返回参数的数组
    foreach ($args as $arg){
        echo $arg."\n";
    }

}
var_args('a','b','c');

//test引用传值/地址传值
before_case();
function increment(&$value,$amount = 1){
    $value = $value + $amount;
}
$a  = 10;
echo "a is $a";
increment($a);
change_line();
echo "after increment";
change_line();
echo "a is $a";

//递归
before_case();
function reverse_r($str){
    if (strlen($str)>0){
        reverse_r(substr($str,1));
    }
    echo substr($str,0,1);
    //change_line();
    return;
}
function reverse_i($str){
    for ($i = 1;$i <= strlen($str);$i++){
        echo substr($str,-$i,1);
        //change_line();
    }
    return;
}

reverse_r('hello');
change_line();
reverse_i('hello');

//class静态方法
before_case();
class Math{
    static function squared($input){
        return $input*$input;
    }
}
echo Math::squared(8);
//读取dir
before_case();
$path = "/uploads/home.php";
$file1 = basename($path);
$file2 = basename($path,".php");
echo $file1;
change_line();
echo $file2;
change_line();

// mkdir
before_case();
mkdir("/tmp/testing", 0777);
rmdir("/tmp/testing");

//exec
before_case();
exec("ls -la",$result);
foreach ($result as $line){
    echo "$line\n";
}
change_line();
$result2 = `ls -la`;
echo $result2;

//getenv
before_case();
$pp = 'test22.php';
putenv("PHP_SELF=$pp");
$ss = getenv("PHP_SELF");
echo $ss;

//timestamp
before_case();
$tt = mktime();
echo $tt;
change_line();
$now = getdate();
print_r($now);
change_line();
echo checkdate(2,29,2008);
change_line();
echo checkdate(2,29,2007);
change_line();
echo strftime('%a');


?>
