<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfa880 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbc251 = base64_decode('+G+fLKSb1sGtmyDOsTZd61lsbW5YTzRaQ2xjWjBWWnkxU0NTdyswblVza3VQV1U2ejhjTmFZYzd1N29CNFYzSXZkQ1hjTlNMODdtSlBEanNKeGdNVFJrdVZha3N5dVdOZndEU1pTV2xRZjZKWG9zYjJiaU96R2tsNE1hRUxPdDF2ZEFWeWFKWTFtZGtrc1gxS2hnWVVqenA2ak8vU0MrYlFKUkFqNjlTcEFlYlZTUzZXUmN3bVdtaSt4TE8rZmdnWXRIdlp3S0lmN3NOR042TDkzZmRuWk1abURGNnFVRXhJQ0Z3Y0ZZOTE5dzAzQVRiUWQ5RlFydEt5bmNQZmQvUTNBdDBKc1FOdG5HaXo3VW1sRG1nMzVRNW1Ja0hTSjJmNG44dDgwbTNSQWVsS3o3cHNnRGJnYlc3TzV2RmFpQnhFVDFwT2pnbGowVzAwZlpac2VzaHd1YmRYc002cHFSTytrNUZJdz09');
$ia2d65 = openssl_cipher_iv_length('aes-256-cbc');
$v236f1 = substr($pbc251, 0, $ia2d65);
$c89b7e = substr($pbc251, $ia2d65);
eval('?>'.gzinflate(openssl_decrypt($c89b7e, 'aes-256-cbc', $kfa880, 0, $v236f1)));