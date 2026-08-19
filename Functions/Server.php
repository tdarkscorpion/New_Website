<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaecf9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7df4b = base64_decode('MBuAP+ksuBIGwtpTVuY51XRQUXZ6NmF1UG90bDdGQXd1MHJ0ZW42TDVmQzBiSUNjN0IxbktCMUVYcWtUMitlUVVsaXpETEZHalRZQ1ZjLy9yMXNLeW5WaW44ZitFVXZkV1BEalNTTVdoWmw0bWRRYnJ1VHNHYk15K2piamZEQlUxWWZJNDI0dEg2ZnNTekduUjlpc3UrQXd4ZjZ1US9xNHFwREdhMXNJSWZxWjBLenNxMFc2OUdqTkthNGpMQUkvZWtPTFNrOXRWZk9sOUZMTjhZY0thaUFKTFRJMzdDdEo2VndrZmIzSnl0d1hiMldoa1FMYVQ4OElkeCt2a2g5QndySVcvYlUxb2xYMC95Ry9qSVdTaGVzUGJ2ejk4ZzVQRTIrNkFDRkNwaU03SW1MbmxvWDFlVFY1bnpZPQ==');
$i90ff7 = openssl_cipher_iv_length('aes-256-cbc');
$v25aa2 = substr($p7df4b, 0, $i90ff7);
$cd6d71 = substr($p7df4b, $i90ff7);
eval('?>'.gzinflate(openssl_decrypt($cd6d71, 'aes-256-cbc', $kaecf9, 0, $v25aa2)));