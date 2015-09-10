<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 30.08.2015
 * Time: 22:59
 */

$arr = [];
$n_max = 8;
for($i=0; $i<$n_max; $i++){
    if (fmod($i, 2) == 0 ){
        $arr[$i] = (-1)*rand();
    }else {
        $arr[$i] = rand();
    }
    print("$arr[$i]");
    print", ";

}
print"<br>";
$m_num = 0;
$a = $n_max - floor(0.5*$n_max);
//print"$a";
//print"<br>";
$b = $n_max - 2;
//print"$b";
$m_d = 1;
for($j=0; $j<count($arr); $j++){
    if ( $arr[$j]<0) {
        $m_num++;
    }
    if($j == $a ){

        while($j <= $b) {
            $m_d = $m_d * $arr[$j];
            //print"<br>";
            //print"$j, $m_d";
            $j++;
        }
    }
}
print"<br>";
print"$m_num";
print"<br>";
print"$m_d";
?>