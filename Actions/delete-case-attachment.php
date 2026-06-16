<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd6aa0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0e931 = base64_decode('0dZ2llahRZWoxHewjF0jkW13dDVPR21OQThwVkJ1a3RNUWhBcndkb1BrcjVNak9GSWp3ajlpZ3M2RTlsOC9hWFpvZ2ZrNXk1NWJ3c2FwcFJNa0xvQkEvZHAwd2dyNENabjA3alhxZkNMRjZTSTlTMk9wRVJJSmcyRE9HUWNhV09zZVpGTUJKY0JKUExJaVgvREtuSWNxT04rTmZBTWp5U2ZveEhLYzBZaVI4RXNZRmQvcDBHWTR3QXBrV1N2T1JYMEEybyttZDV1L3hDWFBwMk5OaGUwaW85a2VzbndMUFViVmovd2FNbUdPV0FSQW4rYy8xWjZSajFOdDdJSlphei9OdnRQa2hhdU1OK2hNR0FlS0x3OFZVcEh6My8xcVVrSjhKQ05tcmgxQW93cm4wYjFHN3A1NkRydUxpV0xDV3E1bTFCOGZzcmhDdzRlcjJH');
$i27451 = openssl_cipher_iv_length('aes-256-cbc');
$v326cd = substr($p0e931, 0, $i27451);
$c38b6d = substr($p0e931, $i27451);
eval('?>'.gzinflate(openssl_decrypt($c38b6d, 'aes-256-cbc', $kd6aa0, 0, $v326cd)));