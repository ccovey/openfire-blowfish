<?php

include('OpenFireBlowFish.php');
include('enc.php');

$a = new OpenFireBlowfish($enckey);
$encstring = bin2hex($a->encryptString('hereisapassword',$enciv));
echo $encstring . "\n";
// echo $a->decryptString(pack("H*", $encstring)) . "\n";

$b = new OpenFireBlowfish($enckey);
echo $b->decryptString(pack("H*", $password_hash)) . "\n";

