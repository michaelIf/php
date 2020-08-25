<?php
echo 'This is a main file.<br />';
require('reusable.php');
echo 'This script will end now.<br />';
function create_table($data){
    echo "<table border=\"1\">";
    //reset($data);
    $value = current($data);
    while ($value){
        echo "<tr><td>".$value."</td></tr>\n";
        $value = next($data);
    }
    echo "</table>";
}
$arr = array('one','two','three');
create_table($arr);

?>