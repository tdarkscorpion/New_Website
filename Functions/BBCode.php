<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k939fe = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe079b = base64_decode('Jws6xzpn7ujLkVX7WwCHamdnZEQ3bURnUDl6ZVFlYm5UdUE3MEo4YnlNSnYxMzZSSHVVMWhqemxwVjBWc0JGdkp2Y1hEc0lKc2ZPUDdDYWtEYVBpUGV2WXlMQlFQd21WOEhoNHBIR3hYeHpvSE91K3pTcjR4VTVrWE9qa3d4K0gvUWFoQVVJWXNlVjBkTi9tVDFTY3JzQWNkRFg1bnZTamJQcVV2Z0U3WkYxK2tXT3U4S1RST3NEQzFPaWJqa2RiS1FreXNiR3UvMk9YTi9jQVNsSHl2ZzNIZXRKdkJXbkRZT1htQ1pZRHlzU1VJV2pHcEZocnBHcGxuQ1lsQk11dkpFdXpSVUJPblB3dnZpNnJMUEVMOXFEYWVSRmpFbGdQSHFkZm5HMW04aXRHemdNZUtUdXdXZkQwVVI5d0xBM2dFY3VybWRsM3IySmdFK1FS');
$iaf02b = openssl_cipher_iv_length('aes-256-cbc');
$vf3e3f = substr($pe079b, 0, $iaf02b);
$c0b503 = substr($pe079b, $iaf02b);
eval('?>'.gzinflate(openssl_decrypt($c0b503, 'aes-256-cbc', $k939fe, 0, $vf3e3f)));