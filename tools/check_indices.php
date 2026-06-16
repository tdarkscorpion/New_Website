<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0b987 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb5c3c = base64_decode('L6HW9YFRDsqEXztFymhbhndialBDYkh3WG1pQ2tKenBFVGFHUE9kZkNGKy83Q2RHV3ltM0NxOXpNekZaaXJBUHRwN3RYdEdFbjNRR2hOVks1aTRPZ1NOR3VSY1VWemwvL0RYcktkV2RwL1BkcnoxMzRTWk0vV0JlWS9Jb215NFVEcnF5UkhQeDlFcTBEWHBSamlQMjN4bzFPSmVIUjVwMVVybFdBQVVPWFhodm1ZVWpVRitQcjFrVlNLZ3hacTR3Zk5adlFmU2Q4Qng4UE1DS2tlNzhBeU4vU2plbUd1Z2tvVzA3ZDBJLzkvNlFhc2trY2ZBYkxRT08vdXFIRlZPTkc1bHdQdmZtbGVCdVBoU0g=');
$i4369a = openssl_cipher_iv_length('aes-256-cbc');
$vce734 = substr($pb5c3c, 0, $i4369a);
$cece79 = substr($pb5c3c, $i4369a);
eval('?>'.gzinflate(openssl_decrypt($cece79, 'aes-256-cbc', $k0b987, 0, $vce734)));