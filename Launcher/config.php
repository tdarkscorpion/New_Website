<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$keee80 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9ed86 = base64_decode('eHWf1uiiYUZSLrrQlgDMmzJtbnM3QWJCYmlNakdCVlVSdnNYRGNzRlBLekhIY0hWRFhpVkZLTytaTWk5OSswWUdxWFA2NUh0ZmdBUGR0RUllKzRCV1RCRlVKM2J0NzFUa1ptZmFCRzFpUG5rQUJaSTB1KzlIbzRZTXVhT2ZMZmx2TzI5S3lMV3NvUVlicVBnb2RTdmtqMGFkOUtDZ3lBTkQzekdXRWd3NnZzMTNSckdnUkpVLzRScVFITTEzNENLNUc5ZUQvUjVSRzhBeEdqNjh5b1dHRTVPdGZUYWUweUVYQXZkdFNzdnBxTWJQTU5oT2QvSEJEN0NXbGVRVVZMcmhYN1R2V05rVWFqV2M3aWZGOWNERTgvRzFrcWpiZXhwbTUwUGVJMUFmMExCa2ZLVE5KcTdzcW5KWHVBPQ==');
$i779aa = openssl_cipher_iv_length('aes-256-cbc');
$v69f47 = substr($p9ed86, 0, $i779aa);
$c861c0 = substr($p9ed86, $i779aa);
eval('?>'.gzinflate(openssl_decrypt($c861c0, 'aes-256-cbc', $keee80, 0, $v69f47)));