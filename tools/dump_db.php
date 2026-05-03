<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k25ea9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4ed77 = base64_decode('dyI5Urqk8PXHJFLiHDhxa0Z4bnJuSEFJL280cWk4TlRSOTFWc1NCSFgrOHh6OHRtY1VYK0ZjR1Bub05BSllZUmZXVFhuZWNQMllmOUd4Ym5MTnVpY3VUcng4K0VrU2dFYW1xZzI1bUd1SmZyWVFIcDAwckltaDU0Yzl0dTcvV3RScFR2TURwekhzb3hrc1NsUklQb0ZDVXhTYWFZdUQ0ckk3T1lhTTgyMk82WEQyNVcvclMvYmtUN1JRbFovcWNMNThWcmtONlZPNWkxV0NRTEg1cjRnbkRtTnJVZ0gzYlc4T0lFN0E9PQ==');
$icbd98 = openssl_cipher_iv_length('aes-256-cbc');
$v63b6a = substr($p4ed77, 0, $icbd98);
$ca9f5f = substr($p4ed77, $icbd98);
eval('?>'.gzinflate(openssl_decrypt($ca9f5f, 'aes-256-cbc', $k25ea9, 0, $v63b6a)));