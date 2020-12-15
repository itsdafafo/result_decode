<?php

$k="80e32263";
$kh="6f8af44abea0";
$kf="351039f4a7b5";
$p="0UlYyJHG87EJqEz6";

function x($t,$k){
    $c=strlen($k);
    $l=strlen($t);
    $o="";
    for($i=0;$i<$l;){
        for($j=0;($j<$c&&$i<$l);$j++,$i++){
            $o.=$t{$i}^$k{$j};
        }
    }
    return $o;
}

$userinput = file_get_contents("php://input");
#echo $userinput;
$base64 = base64_decode($userinput);
#echo "Base64": "/$base64";
$xor = x($base64_decade,$k);
#echo "XOR: ".$xor;
$result = gzuncompress($xor);
echo "Result: ".$result;
?>
