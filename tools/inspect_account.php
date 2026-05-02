<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k364d7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1756f = base64_decode('22dJt34nVzC/x7WJpxlW+WpGWDhaTjVualVURDd2UitITzhnYS9VdlF3eWpDTGYzZlc4TUF3ZndQUXVWUVpaTHJSLzVZb09iQ1ovcVI2MkRJK2NkREVVSzV4M3VudVRCZjFHSjRkbDdjTkZ5N0EvTlZDRmFjZFlhRngrWFhLcXJnc3NhYjgvUUdwSHF4VWVBM2hUTnhlaVh2Tm9sb0J4YlpEVGtrWm5neWRBaU95NmVrYkdPSjcrQmp0VXByOVd4T0xLLzhzT1pEdkhqTHhtRw==');
$ibebef = openssl_cipher_iv_length('aes-256-cbc');
$v816b3 = substr($p1756f, 0, $ibebef);
$cd5f19 = substr($p1756f, $ibebef);
eval('?>'.gzinflate(openssl_decrypt($cd5f19, 'aes-256-cbc', $k364d7, 0, $v816b3)));