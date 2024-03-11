<?php
function validateIpv4Address($ip) {
    if (strlen($ip) > 15) {
        return false;
    }
    $ipNumbers = explode('.',$ip);
    
    if (count($ipNumbers) !== 4) {
        return false;
    }
    
    foreach ($ipNumbers as $ipNumber) {
        
        if (!is_numeric($ipNumber) || $ipNumber > 255 || $ipNumber < 0) {
            return false;
        }
        
        if (is_string($ipNumber) && $ipNumber !== '0' && $ipNumber[0] === '0') {
            return false;
        }
    }
    return true;
}

$ipToValidate = '01.222.222.255';
echo validateIpv4Address($ipToValidate)
?>