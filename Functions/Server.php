<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9bc35 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe2c67 = base64_decode('qSnpQl/nCJ+UBcCJQGTyezRzdGtTSlF1Z092VGc4QXM1cnFHMVVWRXpiajNOTG5XenBkUlhXUmhZWWwvTmZmQjN3RW1XUFhHcU1GNk1sZFhOazFZb240S2lzdVEyVnlMeFVCbG54ZjdLZU1FTXpaR0RSNXBIZHFiR0Z4cHRVbnZmNXpEQTdrM09YcUpHSDB0eXZ2UkY3cGFXazg1eWM5cmRUM2ZuV0Zwbi9XZTIzRUVOUWFtNFhxdlFWazM5T2ZvNUt5SXk1R2JwOWFud1dTbXJkVnlETTZsc2Z5L1FPZzc1cTN5YkswM0EwY2ZQblVURDhGSkUvNjgyZGYzU1NrdGdXanIwQVV3cCt6U1pTTWh4SitUc0FlQVc1WWtMR2ZocWpwL3BlVUdjVEJHMWxrUkE4RTg2NVIyTXVjPQ==');
$iad015 = openssl_cipher_iv_length('aes-256-cbc');
$v41be3 = substr($pe2c67, 0, $iad015);
$cea907 = substr($pe2c67, $iad015);
eval('?>'.gzinflate(openssl_decrypt($cea907, 'aes-256-cbc', $k9bc35, 0, $v41be3)));