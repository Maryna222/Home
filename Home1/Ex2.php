<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 30.08.2015
 * Time: 20:31
 */
$arr = [];
$n_max = 5;
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
$m_sum = 0;
$m_d = 1;
$s = 0;
$p = 0;
for($j=0; $j<count($arr); $j++){
    if ( $arr[$j]>0) {
        $m_sum = $m_sum + $arr[$j];
    }else{
        $s++;
    }
    if(fmod($arr[$j],2) == 0){
        $m_d = $m_d * $arr[$j];
        //$m_d = array_product($arr[$j]);
    }else{
        $p++;
    }

    if($s == 0 && $p == 0){
        print"Not exist ";
    }
}
print"<br>";
print"$m_sum";
print"<br>";
print"$m_d";
?>