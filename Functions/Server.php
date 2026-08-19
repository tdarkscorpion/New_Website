<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k74bf3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pde1a2 = base64_decode('28tn/XNUnNxNsh6Xi2IBGVFzemVnL1VGQU9qYldLb3NEcUJLNGZzcDI1QWFyZ3RZUEd1WGxjOEJPWVlsTkR3L3FoZjZjY21pdTRqS09vVXFNNWVHUEVoa1ozMm9Uelo0Y0EvTmllRnBxRHpjZFZMWkdaU2hTZFJQRHUzSmlyY21JZ1h1TmlMRGRieU5mRjRvYXNDenRRdlR5NGhKQzRRT3RNamplbDltcUpGOUM4ZkczM2NPK0lWQnV4NlRXTlh2emlMdFRrdVlBTkRHS25aVUhaVStyZFhVQlRDb0RFdFhSWVJycENsdU9pYm82OGVDdmV1RE55WHlGYm92WDk5QVR2eEdkY1YzRmtpR3drUU5OQWVwMXVSa1lQT1UxYTlZcm53R2VOeG56M1NaZnkya04ydm03emlGUHN3PQ==');
$i80ad2 = openssl_cipher_iv_length('aes-256-cbc');
$v2b9f2 = substr($pde1a2, 0, $i80ad2);
$c7d0d2 = substr($pde1a2, $i80ad2);
eval('?>'.gzinflate(openssl_decrypt($c7d0d2, 'aes-256-cbc', $k74bf3, 0, $v2b9f2)));