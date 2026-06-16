<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kff19f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p07e20 = base64_decode('Z5QMfGdWLQQ0UYWzQv7l0jRudzBOaFJpVForWXNMRmtqbjUybWo0SmMyOXYvNGlVOTR1OCs5WDVGcDJiRVlFVm5lMy9XZWp1VzIydTRoYzdyWkJZa3YyamhGbjc3MSt6T2FrVmk0amt6aHZpeHplQXJ6NzJJYWJCTllnSE5EbTI5b2hpL1VqSHVtek1CQXNjeHEveVp5YjhYNlFldDZXbGNGTUhab2VtWlZIUWNFNEJnSmFxUHRxZnI2ZFlna1dmRFBVZWFVVXgwSlhHRFU2S2tHSjdFa09ETXJURG1iRzVEeVRKUHc9PQ==');
$ib238a = openssl_cipher_iv_length('aes-256-cbc');
$vd0e39 = substr($p07e20, 0, $ib238a);
$c02565 = substr($p07e20, $ib238a);
eval('?>'.gzinflate(openssl_decrypt($c02565, 'aes-256-cbc', $kff19f, 0, $vd0e39)));