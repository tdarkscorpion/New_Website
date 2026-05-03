<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb07b5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pddbce = base64_decode('WRqBMcSQP+rUJTIZlwCx4EZMdCtDU25VYWxuVitRa3JyN01EcFhuQmZBNG1FL0FHWnpTM29melhkNS9vdktKV3pDOFRGd3lkeEQ0S3NzdXJjeTZ6OFFSMnBoelZWS0VoNUhlcWtPQUZxL0VzVU9JdVA3NGFSQzA3RUpFb3lVc1IvNGdhb0tXakJNY21IdHhmTlkxYSswRkpNMHRoMlhQc3ZVMmNmNWFOSlNmb0IyVnJIVzNZV0hORFRLQzgvQi96dnM1R01DeWxiamdmK0JsU2ZkdHArdFZMNmI2UHNZeG1BcEhpQVE9PQ==');
$i330e6 = openssl_cipher_iv_length('aes-256-cbc');
$v9955e = substr($pddbce, 0, $i330e6);
$c272ef = substr($pddbce, $i330e6);
eval('?>'.gzinflate(openssl_decrypt($c272ef, 'aes-256-cbc', $kb07b5, 0, $v9955e)));