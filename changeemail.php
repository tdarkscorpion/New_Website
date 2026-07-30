<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6ad27 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p418bd = base64_decode('mzuKUc6wiKijfFQzVq6e5FlpSGt1emM4S3QyTEMxV2o1Z1NYT3BxYW14SUVmc3JQcFZnVzRPSU9LZkZyR29PVysrRHRBMnY1S2gxTThzeDFTcHloSkQ0TW9CV0JEMHUwS1NhQVdlZUc1S2hQcStyc2MrK1g4UTVzTS9adTQ2dVdpaXhMTXZTemFxWTE5amVNZk9jS0dBYkU2VVphK21BWmUyZVJDTWRRaVdyOVlCWEdzcllmWFpQaW9Lb1Fsb3FkZ2NDdXFOb0xrTFVmeDUwUHB4Q3ladHdxckZycG9xb1VNR1h6bmI0eFZpeDJIbmcwY1QyWmdQZzk4S3NuTWRtYmcyT1lxS1dZemxmMDRUb0tZcDRnYkRITGJINWdzZ1JOVEdvQ29hRkZDNGd6dHp1UEhhanI5NVdobTl6Y1NjMlYzRUd2QnFoWWNaa08zSTBHZ1A4WHEwSDhqcTREeWlUUHk4TzFWUT09');
$i07224 = openssl_cipher_iv_length('aes-256-cbc');
$v9e084 = substr($p418bd, 0, $i07224);
$c6c0a6 = substr($p418bd, $i07224);
eval('?>'.gzinflate(openssl_decrypt($c6c0a6, 'aes-256-cbc', $k6ad27, 0, $v9e084)));