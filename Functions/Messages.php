<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k84f52 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9cb4e = base64_decode('1a9gEFRs1BS8A6wLmCnqgW9kTysvSUFlUGlCeGM5ZWJjK0h5Y05lbmRFWXFSMkd4VDliZW1vb1JmOEFCaHExOFlLWGZtYXpUSkp3cjdRMHE3KzBGRUlqZGI5aUdIV1Zpb0VZbWNocnRJL3dWb0Zra1RjZnB6ekYzVnAzV0xnTmpXTllKZThHekpvQzgvVDR1b3ZsT2wrY09PSWlkazhocEpEK0dmTkY2UkF1MHFOK1BwUUg4NEppYk0xbG5HaFhUSlcvS0tONjNUNmFaRnFpdFJWQjdFd0Y3VkplN3libGl0ZU5BU013QmVLUElmK3hZSm5mNHU3U1hHNzNsd0ZnTEp0cGlxYXdPNjEzSmZDNERMdW9KMWYyUGE0U3liNHM5Tm1HUzdBNWRTR2xqZXgvQ3RrSHFmVjAzS1BRPQ==');
$i7ef0d = openssl_cipher_iv_length('aes-256-cbc');
$ve09a4 = substr($p9cb4e, 0, $i7ef0d);
$c7695a = substr($p9cb4e, $i7ef0d);
eval('?>'.gzinflate(openssl_decrypt($c7695a, 'aes-256-cbc', $k84f52, 0, $ve09a4)));