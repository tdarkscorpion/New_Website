<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfcc55 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd4d94 = base64_decode('Y14jvnlWVq4YnHM//BZWO0RlemsxcVZCTG1ndHgyeC84a25RVGVwNW91d05KR0grcnVhdDduZXNMVENjSTVzay9GSE5wc3RrNVUrazdLd1JpUHA5d1BJQkxzMS9XbVR0WGtkNk8ySTZCUkVpbzNXc2xBNStoODlGMTdrbFRCYU1RYk1KSGxVSEFudlZBMzVDUzRWOG1neHpuRDFsNW5GbUdISGpMT0lwaXlKVXZxQXluRDB0b0xaaGRJcWlTTWc2Zk9vcGVNUHFsWGNpMWczeDVEb0piSjFKdmZ6bDU2OXpzS0lHd2N1MkJtaWYvM3hpcmtJQm5ITnRCMmwzbWhCdWZldERtbTVyU3BkSjF6b3FGcVpaUXBtZmdxUGZLV3N0UHFvaGUxbDhnNEp6dEU3aGVpSWkwZ05IK0ZUdWZsVlVXQ1psalJ3QTZtYTFUczd0dUFsUzJwbmNvbUQ3cWora3pDMGl0dz09');
$i4575c = openssl_cipher_iv_length('aes-256-cbc');
$v3c7bd = substr($pd4d94, 0, $i4575c);
$c98f7b = substr($pd4d94, $i4575c);
eval('?>'.gzinflate(openssl_decrypt($c98f7b, 'aes-256-cbc', $kfcc55, 0, $v3c7bd)));