<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7d48f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa1a6a = base64_decode('A0I+YltRe4BA1thku5LbUitsclJTVDZYdXZpMm9HZVJQaWFXSDJ6V3BZczNpV3lzdEVKOHFUMzhaYWFBRGpxOVJIN0lrVmVIWDQ1S3FEUTlicWVzRDEvdS90T1B0L2w5RDkyT29jRC8zRVdzWkpwZW05aXhUNFZWM3JFZXAwazBnQnVyVmF4aHJmSkdBUWVZTDlwRnlYZ2kzZXdvS0lTbXJaYUtTaTA5d08zeTdnYitBM3hHN1oyK1BmZktNQ2Ywb3hVanA4QWdlcGN3eWhVblJYWkdLQjJsNnNPbkFTbEFUdU0zbytDREtiVlJqUUszdnJzckRWWmFoZXVpQTFDbHkwWjZYbHBmYkFJdktUQkxmQlFYenFxU3V3K21jY0N1dFpyWnRDTzBqV0w5ZlVLRTFOVDI4K2ZSVDUrbGh3ZitDbGNUZWh2VUhpcHZ2dDNJYWdDMnVYK2tJZ0t0TU1OWHhVWFB3UT09');
$i525cc = openssl_cipher_iv_length('aes-256-cbc');
$v32539 = substr($pa1a6a, 0, $i525cc);
$c74124 = substr($pa1a6a, $i525cc);
eval('?>'.gzinflate(openssl_decrypt($c74124, 'aes-256-cbc', $k7d48f, 0, $v32539)));