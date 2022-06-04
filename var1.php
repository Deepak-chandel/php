<?php
$ip = "134.1.1";
echo"deepak<br>";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
       echo("$ip is a valid IP address");
} else {
    echo("$ip is not a valid IP address");
}
?> 


